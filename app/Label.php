<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = ['name', 'search_box', 'avatar', 'rep', 'telephone', 'email', 'website'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] =$value;
        $this->attributes['search_box'] = strtolower($value);
    }

    public function artists()
    {
        return $this->hasMany(Artist::class);
    }
}
