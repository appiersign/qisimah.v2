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

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function store(Album $album, User $user, Label $label)
    {
        $album->creator()->associate($user);
        $album->label()->associate($label);
        $album->save();
    }
}
