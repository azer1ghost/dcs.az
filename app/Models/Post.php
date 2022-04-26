<?php

namespace App\Models;

use Cache;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use App\Traits\Translatable;

/**
 * @method static published()
 * @method static latest()
 */
class Post extends Model
{
    use Translatable;
    use Resizable;

    protected array $translatable = ['title', 'seo_title', 'excerpt', 'body', 'slug', 'meta_description', 'meta_keywords'];

    const PUBLISHED = 'PUBLISHED';

    protected $guarded = [];

    public function save(array $options = []): bool
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->getKey();
        }

        return parent::save();
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id', 'id')->withDefault(['name' => 'Admin', 'surname' => '']);
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', '=', static::PUBLISHED);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Voyager::modelClass('Category'));
    }

    public static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('component_blog_posts');
            Cache::forget('component_blog_categories');
            Cache::forget('component_posts');
        });
    }
}
