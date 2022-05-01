<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static active()
 */
class Social extends Model
{
    protected $connection = "mysql";

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('component_footer_socials');
        });
    }
}
