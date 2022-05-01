<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reset extends Model
{
    protected $connection = "mysql";

    protected $table = "password_resets";

    protected $fillable = ['email', 'token'];
}
