<?php

namespace App\Models;

use App\Manager;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['full_name', 'nick_name', 'search_box'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    public function setSearchBoxAttribute($value)
    {
        $this->attributes['search_box'] = strtolower($value);
    }
}
