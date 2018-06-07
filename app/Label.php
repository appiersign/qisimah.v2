<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    protected $fillable = ['name', 'search_box', 'avatar'];

    public function setSearchBoxAttribute($value)
    {
        $this->attributes['search_box'] = strtolower($value);
    }
}
