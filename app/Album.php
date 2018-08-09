<?php

namespace App;

use App\Http\Requests\StoreAlbumRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Album extends Model
{

    public function __construct()
    {
        $this->attributes['qisimah_id'] = strtoupper(str_random());
    }

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

    public function setArt(StoreAlbumRequest $request)
    {
        if ($request->hasFile('art')) {
            $art = $request->file('art');
            $path = $art->store('public/images/art');
            $this->attributes['art'] = Storage::url($path);
        } else {
            $this->attributes['art'] = 'images/default.jpg';
        }
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
            session()->flash('success', 'Album created');
            return redirect()->route('albums.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'something went wrong, we could not create your album');
            return redirect()->back();
        }

    }
}
