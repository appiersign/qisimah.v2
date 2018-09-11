<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function song()
    {
        return $this->belongsTo(Song::class, 'audio_id', 'qisimah_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function broadcaster()
    {
        return $this->belongsTo(Broadcaster::class, 'stream_id', 'stream_id');
    }

    public function getPlayedAtAttribute()
    {
        return Carbon::parse($this->attributes['played_at']);
    }
}
