<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'qisimah_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }

    public function youtube()
    {
        return $this->hasMany(YouTube::class);
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class)->withTimestamps();
    }

    public function instagrams()
    {
        return $this->belongsToMany(Instagram::class)->withTimestamps();
    }

    public function media()
    {
        return $this->belongsToMany(Media::class)->withTimestamps();
    }

    public function getInstagramAccessToken()
    {
        return $this->attributes["instagram_access_token"];
    }

    public function getInstagramProfile()
    {
        return $this->instagrams()->first();
    }

    public function getInstagramMedia()
    {
        $instagramProfile = $this->getInstagramProfile();

        if ($instagramProfile->last_media_request && Carbon::parse($instagramProfile->last_media_request)->diffInMinutes(Carbon::now()) > 60) {
            $instagram = new Instagram();
            $instagram->getMedia($this);
        }

        if (!is_null($instagramProfile)){
            return $instagramProfile->media()->orderBy('likes', 'desc')->get();
        }
        return [];
    }
}
