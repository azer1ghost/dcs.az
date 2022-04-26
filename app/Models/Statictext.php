<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

/**
 * @method static where(string $string, $page)
 */
class Statictext extends Model
{
    use Translatable;

    protected array $translatable = ['text'];

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            foreach (config('app.locales') as $lang){
                Cache::forget("static_text_{$this->page}_{$lang}");
            }
        });
    }
}
