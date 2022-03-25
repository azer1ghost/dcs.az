<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'surname',
        'number',
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

    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }

    public function setNumberAttribute($value): ?string
    {
        return $this->attributes['number'] = phone_cleaner($value);
    }

    public function getNumberAttribute($value): ?string
    {
        return phone_formatter($value, true);
    }

    public function getProtectedNumberAttribute(): ?string
    {
        return str_pad(substr($this->getAttribute('number'), -4), strlen($this->getAttribute('number')), '*', STR_PAD_LEFT);
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
