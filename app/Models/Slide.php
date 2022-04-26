<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

/**
 * @method static active()
 */

class Slide extends Model
{
    use Translatable;

    protected array $translatable = ['main_text', 'banner_text','button_text','button_link'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('component_sliders');
        });
    }
}
