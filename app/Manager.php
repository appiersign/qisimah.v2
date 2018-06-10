<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    protected $fillable = ['name', 'search_box', 'avatar', 'rep', 'telephone', 'email', 'website'];

    public function setSearchBoxAttribute($value)
    {
        $this->attributes['search_box'] = strtolower($value);
    }
}
