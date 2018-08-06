<?php

namespace App;

use App\Models\Song;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    public function setTitle($title)
    {
        $_title = strtolower($title);
        $this->attributes['title'] = ucwords($_title);
        $this->attributes['search_box'] = $_title;
    }

    public function setYear($year)
    {
        $this->attributes['release_year'] = (int) $year;
    }

    public function getShortTitle()
    {
        return (strlen($this->attributes['title']) > 7)? substr($this->attributes['title'], 0, 7).'...' : $this->attributes['title'];
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function songs()
    {
        return $this->belongsTo(Song::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function store(User $user, Artist $artist, Label $label)
    {
        $this->user()->associate($user);
        $this->label()->associate($label);
        $this->artist()->associate($artist);

        try {
            $this->save();
            session()->flash('success', 'album created');
            return redirect()->route('albums.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'something went wrong, we could not create your album');
            return redirect()->back();
        }

    }
}
