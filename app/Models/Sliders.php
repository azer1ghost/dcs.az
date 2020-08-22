<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Sliders extends Model
{
    use Translatable;
    protected $translatable = ['main_text', 'banner_text','button_text','button_link'];
}
