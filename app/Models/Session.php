<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $dates = ['start_time', 'end_time'];

    protected $fillable = ['training_id'];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    public function getDurationAttribute(): string
    {
        return $this->getAttribute('start_time')->diff($this->getAttribute('end_time'))->h . ' saat';
    }
}
