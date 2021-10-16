<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static active()
 */
class Social extends Model
{
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }
}
