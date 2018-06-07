<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    protected $fillable = ['nick_name', 'full_name', 'search_box'];

    public function setSearchBoxAttribute($value)
    {
        $this->attributes['search_box'] = strtolower($value);
    }
}
