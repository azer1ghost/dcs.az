<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\Translatable;

class Training extends Model
{
    use Translatable;

    protected array $translatable = ['name', 'content'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }

    public function scopeOrder(Builder $query): Builder
    {
        return $query->orderBy('order');
    }

    public function sessions(): HasMany
    {
        return $this->hasMany(Session::class);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('component_trainings');
        });
    }
}
