<?php

namespace App\Models;

use App\Pivots\Subscription;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Student extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'father',
        'phone',
        'profession',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullnameAttribute(): string
    {
        return "{$this->getAttribute('name')} {$this->getAttribute('surname')}";
    }

    public function trainings(): HasManyThrough
    {
        return $this->hasManyThrough(Training::class, Subscription::class);
    }

    public function sessions(): BelongsToMany
    {
        return $this->belongsToMany(Session::class,'student_session')->using(Subscription::class)->withTimestamps();
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }

    public function setPhoneAttribute($value): ?string
    {
        return $this->attributes['phone'] = phone_cleaner($value);
    }

    public function getPhoneAttribute($value): ?string
    {
        return phone_formatter($value, true);
    }

    public function getProtectedNumberAttribute(): ?string
    {
        return str_pad(substr($this->getAttribute('phone'), -4), strlen($this->getAttribute('phone')), '*', STR_PAD_LEFT);
    }

    public function setNameAttribute($value): ?string
    {
        return $this->attributes['name'] = ucfirst(strtolower($value));
    }

    public function setSurnameAttribute($value): ?string
    {
        return $this->attributes['surname'] = ucfirst(strtolower($value));
    }
}
