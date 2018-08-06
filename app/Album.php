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

    public function setTitle($title)
    {
        $_title = strtolower($title);
        $this->attributes['title'] = ucwords($_title);
        $this->attributes['search_box'] = $_title;
    }

    public function setYear($year)
    {
        $this->attributes['year'] = $year;
    }

    public function setArt($art)
    {
        $this->attributes['art'] = $art;
    }

    public function songs()
    {
        return $this->belongsTo(Song::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    public function store(User $user, Label $label)
    {
        $this->creator()->associate($user);
        $this->label()->associate($label);
        $this->save();
    }
}
