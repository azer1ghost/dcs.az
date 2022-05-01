<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Translatable;

/**
 * @method static slug(string $string)
 * @method static active()
 * @method static key(string $string)
 * @method static select(array $array)
 */
class Page extends Model
{
    use Translatable, SoftDeletes;

    protected $connection = "mysql";

    protected array $translatable = ['title', 'heading', 'body', 'btnText', 'meta_description', 'meta_keywords', 'excerpt'];

    public const STATUS_ACTIVE = 'ACTIVE';
    public const STATUS_INACTIVE = 'INACTIVE';
    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE];

    public function scopeActive($query)
    {
        return $query->where('status', static::STATUS_ACTIVE);
    }

    public const TYPE_DYNAMIC = 'dynamic';
    public const TYPE_STATIC = 'static';
    public static array $types = [self::TYPE_DYNAMIC, self::TYPE_STATIC];

    public function scopeStatic($query)
    {
        return $query->where('status', static::TYPE_STATIC);
    }

    public function scopeSlug($query, $slug)
    {
        return $query->active()->where('slug', $slug);
    }

    public function scopeKey($query, $key)
    {
        return $query->active()->where('key', $key);
    }

    public function hideFields(): array
    {
        return array(
                'homepage'   => ['heading', 'images', 'key', 'banner', 'body', 'image_2'],
                'services'   => ['excerpt', 'body', 'images',  'heading', 'key', 'video_title', 'video', 'image', 'image_2', 'btnText', 'btnColor', 'btnLink'],
                'trainings'   => ['excerpt', 'body', 'images',  'heading', 'key', 'video_title', 'video', 'image', 'image_2', 'btnText', 'btnColor', 'btnLink'],
                'blog'       => ['excerpt', 'heading', 'video_title', 'video', 'image', 'image_2'],
                'contact'    => ['excerpt', 'body', 'heading', 'video_title', 'video', 'image', 'image_2'],
                'about'      => ['excerpt', 'images', 'heading', 'key', 'video_title', 'video', 'image_2', 'btnText', 'btnColor', 'btnLink'],
                'collection' => ['excerpt','body', 'heading', 'video_title', 'video', 'image', 'image_2'],
                '' => ['excerpt', 'heading', 'video_title', 'video', 'image', 'image_2'],
            )
            [$this->key] ?? [];
    }

    public function setKeyAttribute($value) {
        if ( empty($value) ) {
            $this->attributes['key'] = NULL;
        } else {
            $this->attributes['key'] = $value;
        }
    }
}
