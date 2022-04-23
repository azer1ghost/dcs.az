<?php

namespace App\View\Components;

use App\Models\Post;
use Cache;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use TCG\Voyager\Models\Category;

class ArticleSidebar extends Component
{
    public Collection $categories;
    public Collection $latestArticles;

    public function __construct()
    {
        $this->categories = Cache::remember("component_blog_categories", config('cache.timeout'), function (){
           return Category::all();
        });

        $this->latestArticles = Cache::remember("component_posts", config('cache.timeout'), function (){
            return Post::latest()->limit(4)->get();
        });
    }

    public function render()
    {
        return view('website.components.article-sidebar');
    }
}
