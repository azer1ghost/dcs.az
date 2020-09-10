<?php

namespace App\Observers;

use App\Mail\NewsAdded;
use App\Models\Post;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Mail;

class PostEventListener
{

    public function created(Post $post)
    {
        $subscribes = Subscribe::where('subscribe', 'LIKE', '%news%')->get();

        foreach ($subscribes as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsAdded($subscriber->token, $subscriber->lang));
        }
    }


    public function updated(Post $post)
    {

    }


    public function deleted(Post $post)
    {
        //
    }


    public function restored(Post $post)
    {
        //
    }


    public function forceDeleted(Post $post)
    {
        //
    }
}
