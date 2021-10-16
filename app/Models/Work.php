<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Work extends Model
{
    use Translatable;
    protected $translatable = ['uptitle','title','text','btn_text','btn_url','img_title1','img_title2','img_title3'];
}
