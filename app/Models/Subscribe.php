<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Subscribe extends Model
{

    /**
     * @var mixed|string
     */
    private $email;
    protected $fillable = ['email','lang','subscribe','token','deleted'];

}
