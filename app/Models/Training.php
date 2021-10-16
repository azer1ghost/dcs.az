<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Training extends Model
{
    use Translatable;
    protected array $translatable = ['name', 'content'];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany('App\User');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }
}
