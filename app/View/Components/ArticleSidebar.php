<?php

namespace App\View\Components;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;
use TCG\Voyager\Models\Category;

class ArticleSidebar extends Component
{
    public Collection $categories;
    public Collection $latestArticles;

    public function __construct()
    {
        $this->categories = Category::all();
        $this->latestArticles = Post::latest()->limit(4)->get();
    }

    public function render()
    {
        return view('website.components.article-sidebar');
    }
}
