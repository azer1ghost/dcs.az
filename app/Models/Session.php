<?php

namespace App\Models;

use App\Pivots\Subscription;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use TCG\Voyager\Traits\Translatable;

class Session extends Model
{
    use Translatable;

    protected array $translatable = ['title'];

    protected $dates = ['started_at'];

    protected $guarded = ['id'];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_session')->using(Subscription::class)->withTimestamps();
    }

    /**
     * @method static active()
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where('status', true);
    }
}
