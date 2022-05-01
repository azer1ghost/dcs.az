<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Translatable;

/**
 * @method static active()
 */
class Service extends Model
{
    use Translatable, SoftDeletes;

    protected $connection = "mysql";

    protected array $translatable = ['title', 'text', 'excerpt'];

    /**
     * @method static active()
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('component_services');
            Cache::forget('component_footer_services');
        });
    }
}
