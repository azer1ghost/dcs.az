<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

    protected $with = [
        'trainings'
    ];

    public function getFullnameAttribute(): string
    {
        return "{$this->getAttribute('name')} {$this->getAttribute('surname')}";
    }

    public function trainings(): BelongsToMany
    {
        return $this->belongsToMany(Training::class,'training_user','user_id')->withTimestamps();
    }

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class, 'user_id');
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