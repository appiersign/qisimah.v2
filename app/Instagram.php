<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instagram extends Model
{
    protected $fillable = ['qisimah_id', 'external_id', 'user_name', 'full_name', 'avatar', 'bio', 'website', 'is_business', 'media', 'follows', 'followed_by', 'likes', 'comments', 'last_request', 'last_media_request'];
    
}
