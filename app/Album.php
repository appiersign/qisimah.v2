<?php

namespace App;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function songs()
    {
        return $this->belongsTo(Song::class);
    }
}
