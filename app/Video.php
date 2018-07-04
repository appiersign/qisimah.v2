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

    public function getPublishedAtAttribute()
    {
        return Carbon::parse($this->attributes['published_at']);
    }

    public function getDescriptionAttribute()
    {
        $words = explode(' ', $this->attributes['description']);
        if (count($words) > 50){
            $description = implode(' ', array_slice($words, 0, 50)). ' ...';
        } else {
            $description = implode(' ', $words);
        }
        return $description;
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
