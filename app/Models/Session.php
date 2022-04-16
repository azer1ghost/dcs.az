<?php

namespace App\Models;

use App\Pivots\Subscription;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use TCG\Voyager\Traits\Translatable;

class Session extends Model
{
    use Translatable;

    protected array $translatable = ['title'];

    protected $dates = ['start_time', 'end_time'];

    protected $fillable = ['training_id'];

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }

    public function getDurationAttribute(): string
    {
        return $this->getAttribute('start_time')->diff($this->getAttribute('end_time'))->h . ' saat';
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'student_session')->using(Subscription::class)->withTimestamps();
    }
}
