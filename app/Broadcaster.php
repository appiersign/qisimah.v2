<?php

namespace App;

use App\Http\Requests\StoreBroadcasterRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Broadcaster extends Model
{

    protected $guarded = ['id'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function setQisimahId()
    {
        $this->attributes['qisimah_id'] = str_random();
        return $this;
    }

    public function setNameAttribute(string $name)
    {
        $_name = strtolower($name);
        $this->attributes['name'] = ucwords($_name);
        $this->attributes['search_box'] = $_name;
        return $this;
    }

    public function setCityAttribute(string $city)
    {
        $this->attributes['city'] = ucwords(strtolower($city));
        return $this;
    }

    public function setTagLineAttribute(string $tag_line)
    {
        $this->attributes['tag_line'] = ucwords(strtolower($tag_line));
        return $this;
    }

    public function setLogo(StoreBroadcasterRequest $request)
    {
        if ($request->hasFile('logo')){
            $path = str_replace('public', 'storage', $request->file('logo')->store('public/images/broadcasters'));
        } else {
            $path = 'images/default.jpg';
        }
        $this->attributes['logo'] = $path;
        return $this;
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getLocation()
    {
        $region = $this->region()->with('country')->first();
        return $this->attributes['city'] . ', '. $region->country->name;
    }
}
