<?php

namespace App;

use App\Http\Requests\StoreBroadcasterRequest;
use Illuminate\Database\Eloquent\Model;

class Broadcaster extends Model
{

    public function setQisimahId()
    {
        $this->attributes['qisimah_id'] = str_random();
        return $this;
    }

    public function setName(string $name)
    {
        $_name = strtolower($name);
        $this->attributes['name'] = ucwords($_name);
        $this->attributes['search_box'] = $_name;
        return $this;
    }

    public function setFrequency(string $frequency)
    {
        $this->attributes['frequency'] = $frequency;
        return $this;
    }

    public function setCity(string $city)
    {
        $this->attributes['city'] = strtolower(ucwords($city));
        return $this;
    }

    public function setTagLine(string $tag_line)
    {
        $this->attributes['tag_line'] = strtolower(ucwords($tag_line));
        return $this;
    }

    public function setType(string $type)
    {
        $this->attributes['type'] = $type;
        return $this;
    }

    public function setLogo(StoreBroadcasterRequest $request)
    {
        if ($request->hasFile('logo')){
            $path = storage_path($request->file('logo')->store('public/images/broadcasters'));
        } else {
            $path = 'images/default.jgp';
        }
        $this->attributes['logo'] = $path;
        return $this;
    }

    public function setAddress(string $address)
    {
        $this->attributes['address'] = $address;
        return $this;
    }

    public function setStreamUrl(string $url)
    {
        $this->attributes['stream_url'] = $url;
        return $this;
    }

    public function setTelephone(string $telephone)
    {
        $this->attributes['telephone'] = $telephone;
        return $this;
    }

    public function setStreamId(string $stream_id)
    {
        $this->attributes['stream_id'] = $stream_id;
        return $this;
    }

    public function setRegion(int $region)
    {
        $this->region()->associate($region);
        return $this;
    }

    public function setUser(int $user)
    {
        $this->user()->associate($user);
        return $this;
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function store()
    {
        try {
            $this->save();
            session()->flash('success', 'Broadcaster created!');
            return redirect()->route('broadcasters.index');
        } catch (\Exception $exception) {
            session()->flash('error', 'Something went wrong, we could not create broadcaster');
            return redirect()->back()->withInput();
        }
    }
}
