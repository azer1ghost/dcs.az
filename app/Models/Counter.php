<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

/**
 * @method static active()
 */
class Counter extends Model
{
    use Translatable;

    protected $connection = "mysql";

    const COMPANY = 1;
    const CERTIFICATE = 2;
    const STUDENT = 3;
    const TRAINING = 4;

    protected $fillable = ['value'];

    protected array $translatable = ['text'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    protected static function booted()
    {
        static::saved(function () {
            Cache::forget('component_counters');
        });
    }
}

