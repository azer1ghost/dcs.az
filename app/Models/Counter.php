<?php

namespace App\Models;

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

    protected array $translatable = ['text'];

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }
}
