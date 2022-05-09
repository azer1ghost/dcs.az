<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Traits\Translatable;

class Training extends Model
{
    use Translatable;

    protected $connection = "mysql";

    protected $fillable = ['group_id'];

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

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class)->withDefault();
    }

    public function scopeByGroupId($query)
    {
        return $query->order()->where('group_id', request()->route('group'));
    }

    public function highlighted($column, $search): ?string
    {
        return $search ?
            preg_replace('/(' . $search . ')/i', "<b>$1</b>", $this->getTranslatedAttribute($column)):
            $this->getTranslatedAttribute($column);
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('component_trainings');
        });
    }
}
