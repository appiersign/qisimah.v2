<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Song extends Model
{
    private $file;
    private $song;

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
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
}
