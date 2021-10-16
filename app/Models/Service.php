<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static active()
 */
class Service extends Model
{
    use Translatable, SoftDeletes;
    protected array $translatable = ['title', 'text', 'excerpt'];
    /**
     * @method static active()
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }
}
