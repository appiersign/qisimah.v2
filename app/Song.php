<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Song extends Model
{
    private $file;

    public function setQisimahId()
    {
        $this->attributes['qisimah_id'] = strtoupper(str_random());
        return $this;
    }

    public function setFile(Request $request)
    {
        $this->file = $request->file('song');
        return $this;
    }

    public function setSongPath(string $path)
    {
        $this->attributes['audio'] = $path;
        return $this;
    }

    public function setAlbumId(int $id)
    {
        $this->album()->associate($id);
        return $this;
    }

    public function setUserId(int $id)
    {
        $this->user()->associate($id);
        return $this;
    }

    public function setAcrId(string $acr_id)
    {
        $this->attributes['acr_id'] = $acr_id;
        return $this;
    }

    public function setTitle(string $title)
    {
        $_title = strtolower($title);
        $this->attributes['title'] = ucwords($_title);
        $this->attributes['search_box'] = $_title;
        return $this;
    }

    /**
     * @param int $duration
     *
     * @return Song
     */
    public function setDuration(int $duration)
    {
        $this->attributes['duration'] = $duration;
        return $this;
    }

    public function setArtist(int $artist)
    {
        $this->artist()->associate($artist);
        return $this;
    }

    public function setStatus(bool $status)
    {
        $this->attributes['status'] = $status;
        return $this;
    }

    public function setVersion(string $version)
    {
        $this->attributes['version'] = $version;
        return $this;
    }

    public function setCoverArt(Request $request, bool $update = false)
    {
        if ($request->hasFile('art')) {
            $path = Storage::url($request->file('art')->store('public/images/arts'));
        } elseif ($update) {
            $path = $this->art;
        } else {
            $path = '/images/default.jpg';
        }
        $this->attributes['art'] = $path;
        return $this;
    }

    public function setReleaseDate(string $release_date)
    {
        $this->attributes['release_date'] = $release_date;
        return $this;
    }

    public function setProducers(array $producers, bool $update = false)
    {
        ($update)? $this->producers()->sync($producers) : $this->producers()->attach($producers);
        return $this;
    }

    public function getProducers()
    {
        return implode(" / ", $this->producers->pluck('nick_name')->toArray());
    }

    public function getProducerIds()
    {
        return $this->producers()->pluck('producers.id')->toArray();
    }

    public function setFeatured(array $featured_artists, bool $update = false)
    {
        ($update)? $this->featured()->sync($featured_artists) : $this->featured()->attach($featured_artists);
        return $this;
    }

    public function getFeatured()
    {
        $artists = $this->getFeaturedArtists();
        if (count($artists)){
            return implode(" / ", $artists);
        }
        return '----';
    }

    public function getFeaturedArtists()
    {
        return $this->featured->pluck('nick_name')->toArray();
    }

    public function getFeaturedIds()
    {
        return $this->featured()->pluck('artists.id')->toArray();
    }

    public function setGenres(array $genres, bool $update = false)
    {
        ($update)? $this->genres()->sync($genres) : $this->genres()->attach($genres);
        return $this;
    }

    public function getGenreIds()
    {
        return $this->genres()->pluck('genres.id')->toArray();
    }

    public function getGenres()
    {
        return implode(", ", $this->genres->pluck('name')->toArray());
    }

    public function getReleaseYear()
    {
        return substr($this->attributes['release_date'], 0, 4);
    }

    public function setLabel(int $label)
    {
        $this->label()->associate($label);
        return $this;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function label()
    {
        return $this->belongsTo(Label::class);
    }

    public function featured()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function producers()
    {
        return $this->belongsToMany(Producer::class);
    }

    /**
     * @param Request $request
     *
     * @return string
     */
    public function upload()
    {
        $path = Storage::url($this->file->store('public/songs'));

        $this->setSongPath($path)
            ->setUserId(Auth::id())
            ->setQisimahId();
        try {
            $this->save();
            return redirect()->route('songs.metadata', ['qisimah_id' => $this->qisimah_id]);
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            session()->flash('error', 'Song could not be uploaded at the is time!');
            return redirect()->back();
        }
    }

    public function saveMetadata(bool $update = false, string $qisimah_id = '')
    {
        try {
            $this->save();
            ($update)? session()->flash('success', 'Song Updated!') : session()->flash('success', 'Song Saved!');
            return ($update)? redirect()->route('songs.show', ["qisimah_id" => $qisimah_id]) : redirect()->route('songs.index');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            session()->flash('error', 'Song could not be saved. Please try again!');
            return ($update)? redirect()->route('songs.show', ["qisimah_id" => $qisimah_id]) : redirect()->route('songs');
        }
    }

    public function remove()
    {
        if ($this->user->id == Auth::id()) {
            try {
                $this->delete();
                session()->flash('success', 'Song Removed!');
                return redirect()->route('songs.index');
            } catch (\Exception $exception) {
                session()->flash('error', 'Song could not be removed!');
                return redirect()->back();
            }
        }
        session()->flash('error', 'You are not allowed to perform this action!');
        return redirect()->back();

    }
}
