<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['qisimah_id', 'published_at', 'title', 'description', 'channel_id', 'thumbnail_medium', 'thumbnail_default', 'thumbnail_standard', 'thumbnail_high', 'thumbnail_maxres', 'video_id'];

    public function setPublishedAtAttribute($value)
    {
        $this->attributes['published_at'] = Carbon::parse($value)->toDateTimeString();
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
