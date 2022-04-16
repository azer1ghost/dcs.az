<?php
namespace App\Pivots;

use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasManyThrough, Pivot};
use App\Models\{Session, Student, Training};

class Subscription extends Pivot {

    protected $table = 'student_session';

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function session(): BelongsTo
    {
        return $this->belongsTo(Session::class);
    }

//    public function trainings(): HasManyThrough
//    {
//        return $this->hasManyThrough(Training::class, Session::class);
//    }
}
