<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Instagram extends Model
{
    protected $fillable = ['qisimah_id', 'external_id', 'user_name', 'full_name', 'avatar', 'bio', 'website', 'is_business', 'media', 'follows', 'followed_by', 'likes', 'comments', 'last_request', 'last_media_request'];

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function handleInstagramAuthentication(Request $request): bool
    {
        $state = $request->get('state');
        if ($state === csrf_token()){
            $code = $request->get('code');
            if ($code){
                $this->user->instagram_auth_code = $code;
                $this->user->save();
                Auth::loginUsingId($this->user->id);
                return redirect()->to('')->with([
                    'success' => 'Instagram account linked!',
                    'tab' => 'instagram'
                ]);
            }
        }
        Auth::logout();
        return new OAuthException("state does not exist!");
    }

    public function getAccessToken(): bool
    {
        // TODO
    }

    public function getProfile(): array
    {
        // TODO
    }

    public function getMedia(): array
    {
        // TODO
    }

}
