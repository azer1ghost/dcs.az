<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

/**
 * @method static where(string $string, $page)
 */
class Statictext extends Model
{
    use Translatable;
    protected $translatable = ['text'];
}
