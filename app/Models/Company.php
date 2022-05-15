<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Company extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $connection = "mysql";

    public function setPhoneAttribute($value): ?string
    {
        return $this->attributes['phone'] = phone_cleaner($value);
    }

    public function getPhoneAttribute($value): ?string
    {
        return phone_formatter($value, true);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function certificates(): HasManyThrough
    {
        return $this->hasManyThrough(Certificate::class,Student::class);
    }
}
