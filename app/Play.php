<?php

namespace App\Models;

use App\Artist;
use App\Broadcaster;
use App\Song;
use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    protected $guarded = ['id'];

    public function songs()
    {
        return $this->hasMany(Song::class, 'qisimah_id', 'audio_id');
    }

    public function artists()
    {
        return $this->hasManyThrough(Artist::class, Song::class, 'qisimah_id');
    }

    public function broadcaster()
    {
        return $this->belongsTo(Broadcaster::class, 'stream_id', 'stream_id');
    }
}
