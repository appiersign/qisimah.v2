<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    public function broadcasters()
    {
        return $this->hasMany(Broadcaster::class);
    }
}