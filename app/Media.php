<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = [
        "qisimah_id",
        "external_id",
        "instagram_id",
        "caption",
        "type",
        "link",
        "user_has_liked",
        "likes",
        "comments",
        "avatar",
        "avatar_low",
        "avatar_standard",
        "created_time"
    ];

    public function getCreatedTimeAttribute()
    {
        return Carbon::createFromTimestamp($this->attributes['created_time'])->toDateTimeString();
    }
}
