<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Articles extends Component
{
    public Collection $articles;

    public function __construct()
    {
        $this->articles = \App\Models\Post::published()->with('author')->latest()->limit(4)->get();
    }

    public function render()
    {
        return view('website.components.articles');
    }
}
