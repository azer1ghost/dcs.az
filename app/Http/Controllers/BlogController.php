<?php

namespace App\Http\Controllers;

use App\Models\Ourservice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        //Get blogs with local language and paginate
        $blogs = Post::withTranslation(App::getLocale())->published()->paginate(4);

        //Get categories with local language
        $categories = Category::all()->translate('locale', App::getLocale());

        return view('frontend.pages.blog.index',compact(['blogs','categories']));
    }

    public function search($slug)
    {
        //Get blogs with local language and paginate
        $blogs = Post::whereTranslation('title', 'LIKE', '%' . $slug . '%')->published()->paginate(4);

        //Get categories with local language
        $categories = Category::all()->translate('locale', App::getLocale());

        return view('frontend.pages.blog.index',compact(['blogs','categories']));
    }

    public function category($slug)
    {
        //get category id
        $CategoryID = Category::select('id')->where('slug', $slug)->firstOrFail()->id;

        //Get blogs with local language and paginate
        $blogs = Post::where('category_id', $CategoryID)->published()->paginate(4);

        //Get categories with local language
        $categories = Category::all()->translate('locale', App::getLocale());

        return view('frontend.pages.blog.index',compact(['blogs','categories']));
    }

    public function post($slug)
    {
        //get post content from slug with author details
        $post = Post::with('authorId')->where('slug', $slug)->firstOrFail()->translate('locale', App::getLocale());

        //Get categories with local language
        $categories = Category::all()->translate('locale', App::getLocale());

        return view('frontend.pages.blog.post',compact(['post','categories']));
    }
}
