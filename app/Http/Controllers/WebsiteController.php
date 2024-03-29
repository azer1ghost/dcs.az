<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriberRequest;
use App\Http\Requests\UpdateProfile;
use App\Models\Group;
use App\Models\Post;
use App\Models\Service;
use App\Models\Session;
use App\Models\Subscriber;
use App\Models\Training;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Models\Page;
use Illuminate\Http\Request;
use Notification;
use function GuzzleHttp\Promise\all;

class WebsiteController extends Controller
{
    public function homepage()
    {
        $meta = meta('homepage');

        return view('website.pages.homepage', compact('meta'));
    }

    public function trainings()
    {
        $meta = meta('groups', ['banner']);

        $groups = Group::query()
            ->where('status', true)
            ->orderBy('order')
            ->paginate(12);

        return view('website.pages.groups', compact('groups', 'meta'));
    }

    public function training(Group $group)
    {
        $trainings = Training::query()
            ->whereBelongsTo($group)
            ->when(\request()->get('search'), function ($q, $search) {
                $q->whereTranslation('name', 'LIKE', "%{$search}%");
            })
            ->where('status', true)
            ->paginate(10);

        $meta = meta('groups', ['banner']);

        return view('website.pages.group-detail', compact(['group', 'trainings', 'meta']));
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
        $meta = meta('articles');
        $category = $request->get('category');
        $search = $request->get('search');

        $posts = Post::published()
            ->when(is_numeric($category), fn($query) => $query->where('category_id', $category))
            ->when($request->filled('search'), fn($query) => $query->whereTranslation('title', 'LIKE', "%$search%"))
            ->latest()
            ->paginate(5);

        return view('website.pages.articles', compact('posts', 'meta'));
    }

    public function article(Post $post)
    {
        $post->load('author');
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

    public function contact()
    {
        $meta = meta('contact', ['banner']);

        return view('website.pages.contact', compact('meta'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:100',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $users = User::query()
            ->whereHas('role', function ($q){
                $q->whereIn('name', ['developer', 'admin']);
            })
            ->get();

        Notification::send($users, new \App\Notifications\ContactForm($validated));

        return back()->with('success');
    }
}
