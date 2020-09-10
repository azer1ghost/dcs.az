<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Category;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        //Get blogs with local language and paginate
        $blogs = Post::withTranslation(App::getLocale())->latest()->published()->paginate(4);

        return view('frontend.pages.blog.index', compact('blogs'));
    }

    public function search($slug)
    {
        //Get blogs with local language and paginate
        $blogs = Post::whereTranslation('title', 'LIKE', '%' . $slug . '%')->latest()->published()->paginate(4);

        return view('frontend.pages.blog.index', compact('blogs'));
    }

    public function category($slug)
    {
        //get category id
        $CategoryID = Category::select('id')->where('slug', $slug)->firstOrFail()->id;

        //Get blogs with local language and paginate
        $blogs = Post::where('category_id', $CategoryID)->latest()->published()->paginate(4);

        return view('frontend.pages.blog.index', compact('blogs'));
    }

    public function post($slug)
    {
        //get post content from slug with author details
        $post = Post::with('authorId')->where('slug', $slug)->firstOrFail()->translate('locale', App::getLocale());

        return view('frontend.pages.blog.post', compact('post'));
    }
}
