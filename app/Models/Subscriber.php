<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create($data)
 * @method static where(string $string, $email)
 */
class Subscriber extends Model
{
    protected $connection = "mysql";

    protected $fillable = ['email', 'token', 'lang'];
}
