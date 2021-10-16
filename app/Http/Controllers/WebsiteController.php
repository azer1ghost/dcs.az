<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Service;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\Page;

class WebsiteController extends Controller
{
    public function homepage()
    {
        return view('website.pages.homepage');
    }

    public function trainings()
    {
        $trainings = Training::active()->orderBy('order')->paginate(5);
        return view('website.pages.trainings', compact('trainings'));
    }

    public function training(Training $training)
    {
        return view('website.pages.training-detail', compact('training'));
    }

    public function services()
    {
        $services = Service::active()->orderBy('order')->paginate(5);
        return view('website.pages.services', compact('services'));
    }

    public function articles(Request $request)
    {
        $category = $request->get('category');
        $search = $request->get('search');

        $posts = Post::published()
            ->when(is_numeric($category), fn($query) => $query->where('category_id', $category))
            ->when(!is_null($search), fn($query) => $query->where('title', 'LIKE', "%$search%"))
            ->latest()
            ->paginate(5);

        return view('website.pages.articles', compact('posts'));
    }

    public function article(Post $post)
    {
        return view('website.pages.article', compact('post'));
    }

    public function page(Page $page)
    {
        return view('website.pages.page', compact('page'));
    }

    public function profile(): string
    {
        return 'profile';
    }
}
