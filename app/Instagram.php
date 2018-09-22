<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class Instagram extends Model
{
    protected $fillable = ['qisimah_id', 'external_id', 'artist_id', 'user_name', 'full_name', 'avatar', 'bio', 'website', 'is_business', 'media', 'follows', 'followed_by', 'likes', 'comments', 'last_request', 'last_media_request'];

    public function setIsBusinessAttribute($is_business)
    {
        $this->attributes['is_business'] = (bool) $is_business;
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function artist()
    {
        return $this->hasOne(Artist::class);
    }

    public function handleInstagramAuthentication(Request $request, User $user, Artist $artist)
    {
        if ($request->get('state') === csrf_token()){
            session()->flash('tab', 'instagram');
            Auth::loginUsingId($user->id);
            if ($request->get('code')){
                $artist->instagram_auth_code = $request->get('code');
                $artist->save();
                return $this->getAccessToken($artist);
            } else {
                $request->session()->flash('error', 'Instagram account link failed. Please try again!');
            }
            return redirect()->to('');
        }
        session()->flash('error', 'Authorization required. Please login!');
        return redirect()->to('login');
    }

    /**
     * @param Artist $artist
     * @return \Illuminate\Http\RedirectResponse
     */
    public function getAccessToken(Artist $artist)
    {
        $fields = 'client_id='.env('INSTAGRAM_CLIENT_ID').'&client_secret='.env('INSTAGRAM_CLIENT_SECRET').'&grant_type=authorization_code&code='.$artist->instagram_auth_code.'&redirect_uri='.env('INSTAGRAM_REDIRECT_URI').'?tag='.Auth::user()->qisimah_id.'-'.$artist->qisimah_id;
        $response = json_decode(sendRequest(env('INSTAGRAM_ACCESS_TOKEN_URL'), [], $fields, 'POST'), true);
        if (isset($response['code'])) {
            \session()->flash('error', 'Instagram Authorization Error. Please try again!');
            return redirect()->route('artists.index');
        }
        $artist->instagram_access_token = $response['access_token'];
        $artist->save();

        $instagram = Instagram::with([])->where('external_id', $response['user']['id'])->first();

        if (is_null($instagram)) {
            try {
                Instagram::create([
                    "external_id"   =>  $response["user"]["id"],
                    "qisimah_id" => str_random(),
                    "user_name" => $response["user"]["username"],
                    "full_name" => $response["user"]["full_name"],
                    "avatar"    => $response["user"]["profile_picture"],
                    "bio"       => $response["user"]["bio"],
                    "website"   => $response["user"]["website"],
                    "is_business"   => $response["user"]["is_business"],
                    "last_request"  => Carbon::now()->toDateTimeString(),
                    "artist_id" => $artist->id
                ]);

                $this->getProfile($artist);
                $this->getMedia($artist);

            } catch (\Exception $exception) {
                \session()->flash('error', 'Saving Instagram data failed. Please try again!');
                return back();
            }
        } else {
            $instagram->update([
                "user_name" => $response["user"]["username"],
                "full_name" => $response["user"]["full_name"],
                "avatar"    => $response["user"]["profile_picture"],
                "bio"       => $response["user"]["bio"],
                "website"   => $response["user"]["website"],
                "is_business"   => $response["user"]["is_business"],
                "last_request"  => Carbon::now()->toDateTimeString(),
            ]);

            $this->getProfile($artist);
            $this->getMedia($artist);
        }
        return redirect()->route('artists.instagrams.index', ['artist_qisimah_id' => $artist->qisimah_id]);
    }

    public function getProfile(Artist $artist): array
    {
        $response = json_decode(sendRequest(env('INSTAGRAM_GET_PROFILE_URI').'?access_token='.$artist->instagram_access_token, []), true);
        if (isset($response['code'])) {
            return redirect()->route('artists.instagrams.create', ['artist_qisimah_id' => $artist->qisimah_id]);
        }

        if (isset($response["meta"]["code"]) && $response["meta"]["code"] == 200) {
            $instagram = Instagram::where('external_id', $response["data"]["id"])->first();
            if ($instagram){
                $instagram->media = $response["data"]["counts"]["media"];
                $instagram->follows = $response["data"]["counts"]["follows"];
                $instagram->followed_by = $response["data"]["counts"]["followed_by"];
                $instagram->save();
                return $instagram->toArray();
            }
            return [];
        }

        return $response;
    }

    public function getMedia(Artist $artist, string $uri = null)
    {
        try {
            $instagramProfile = $artist->instagram;
            $_uri = ($uri)? $uri : env('INSTAGRAM_GET_MEDIA_URI').'access_token='.$artist->instagram_access_token;
            $response = json_decode(sendRequest($_uri, []), true);
            if (isset($response['code'])) {
                return redirect()->route('artists.instagrams.create', ['artist_qisimah_id' => $artist->qisimah_id]);
            }

            $this->handleMedia($response["data"], $instagramProfile->id);

            if (count($response["pagination"]) === 2 && isset($response["pagination"]["next_url"])){
                $this->getMedia($artist, $response["pagination"]["next_url"]);
            }

            $likes = $this->getLikes($instagramProfile->id);
            $instagramProfile->likes = $likes;
            $instagramProfile->last_media_request = Carbon::now()->toDateTimeString();
            $instagramProfile->save();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            \session()->flash('error', 'Instagram media could not be fetched at this time!');
        }

    }

    public function handleMedia(array $data, int $instagram_id)
    {
        foreach ($data as $datum) {
            Media::create([
                "qisimah_id"    =>  strtoupper(str_random()),
                "external_id"   =>  $datum["id"],
                "instagram_id"  =>  $instagram_id,
                "caption"       =>  $datum["caption"]["text"],
                "type"          =>  $datum["type"],
                "link"          =>  $datum["link"],
                "user_has_liked"    =>  (bool) $datum["user_has_liked"],
                "likes"         =>  $datum["likes"]["count"],
                "comments"      =>  $datum["comments"]["count"],
                "avatar"        =>  $datum["images"]["thumbnail"]["url"],
                "avatar_low"    =>  $datum["images"]["low_resolution"]["url"],
                "avatar_standard"   =>  $datum["images"]["standard_resolution"]["url"],
                "created_time"  =>  $datum["created_time"]
            ]);
        }
    }

    public function getLikes(int $instagram_id): int
    {
        return (int) Media::where('instagram_id', $instagram_id)->sum('likes');
    }

}
