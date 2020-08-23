<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Ourservice extends Model
{
    use Translatable;
    protected $translatable = ['title', 'text','link'];
}
