<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Http\Requests\UpdateProfile;
use App\Models\Post;
use App\Models\Service;
use App\Models\Session;
use App\Models\Subscriber;
use App\Models\Training;
use Illuminate\Http\RedirectResponse;
use App\Models\Page;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homepage()
    {
        $meta = meta('homepage');

        return view('website.pages.homepage', compact('meta'));
    }

    public function trainings()
    {
        $meta = meta('trainings', ['banner']);

        $trainings = Training::active()->orderBy('order')->paginate(5);

        return view('website.pages.trainings', compact('trainings', 'meta'));
    }

    public function training(Training $training)
    {
        $training->load('sessions');

        $meta = meta('trainings');

        return view('website.pages.training-detail', compact('training'));
    }

    public function trainingSubscribe(Training $training, Session $session): RedirectResponse
    {
        auth('student')->user()->sessions()->attach($session);

        return back()->with('success');
    }

    public function trainingUnsubscribe(Session $session): RedirectResponse
    {
        auth('student')->user()->sessions()->detach($session);

        return back()->with('success');
    }

    public function services()
    {
        $meta = meta('services', ['banner']);

        $services = Service::active()->orderBy('order')->paginate(5);

        return view('website.pages.services', compact('services', 'meta'));
    }

    public function articles(Request $request)
    {
        $meta = meta('articles', ['banner']);
        $category = $request->get('category');
        $search = $request->get('search');

        $posts = Post::published()
            ->when(is_numeric($category), fn($query) => $query->where('category_id', $category))
            ->when($request->filled('search'), fn($query) => $query->where('title', 'LIKE', "%$search%"))
            ->latest()
            ->paginate(5);

        return view('website.pages.articles', compact('posts', 'meta'));
    }

    public function article(Post $post)
    {
        return view('website.pages.article', compact('post'));
    }

    public function page(Page $page)
    {
        return view('website.pages.page', compact('page'));
    }

    public function subscribe(SubscriberRequest $request): RedirectResponse
    {
        Subscriber::create($request->validated());
        return back()->with('success');
    }

    public function unsubscribe($token): RedirectResponse
    {
        Subscriber::where('token', $token)->findOrFail()->delete();
        return back()->with('success');
    }

    public function profile()
    {
        return view('website.pages.profile')->with([
            'user' => auth('student')->user()
        ]);
    }

    public function updateProfile(UpdateProfile $request): RedirectResponse
    {
        $request->user()->update(
            $request->validated()
        );

        return back()->with('success');
    }
}
