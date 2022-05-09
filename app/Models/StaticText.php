<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Translatable;

/**
 * @method static where(string $string, $page)
 */
class StaticText extends Model
{
    use Translatable;

    protected $connection = "mysql";

    protected array $translatable = ['text'];

    public static function boot()
    {
        parent::boot();
        static::saved(function (StaticText $staticText) {
            foreach (config('app.locales') as $lang){
                Cache::forget("static_text_{$staticText->getAttribute('group')}_{$lang}");
            }
        });
    }
}
