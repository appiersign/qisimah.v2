<?php

namespace App;

use App\Manager;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['full_name', 'nick_name', 'search_box', 'label_id', 'manager_id', 'qisimah_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function setSearchBoxAttribute($value)
    {
        $this->attributes['search_box'] = strtolower($value);
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }

    public function features()
    {
        return $this->belongsToMany(Song::class);
    }

    public function instagram()
    {
        return $this->hasOne(Instagram::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function youtube()
    {
        return $this->hasOne(YouTube::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }

    /**
     * @return bool|mixed
     */
    public function setGoogleAccessAndRefreshToken()
    {
        try {
            $headers = [];
            $url = "https://www.googleapis.com/oauth2/v4/token?code=$this->google_auth_code&client_id=744307183277-du6f030bialb2cnnqfg45549tikcnrhq.apps.googleusercontent.com&client_secret=Svenu57nqcp5n5l6fNn2CcPb&redirect_uri=http://localhost:8000/3rd-party/auth/google&grant_type=authorization_code";
            $google = new Google;
            $response = json_decode($google->sendRequest($url, $headers, ''), true);
            if (isset($response['access_token']) && isset($response['access_token'])) {
                $this->google_access_token = $response['access_token'];
                $this->google_refresh_token = $response['refresh_token'];
                $this->google_access_token_expires_at = Carbon::now()->addSeconds((int) $response['expires_in'])->toDateTimeString();
                $this->save();
                return $this;
            }
            return false;
        } catch (\Exception $exception) {
            logger($exception);
        }
    }
}
