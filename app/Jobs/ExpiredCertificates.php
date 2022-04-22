<?php

namespace App\Jobs;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Notification;

class ExpiredCertificates implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $expired = Certificate::query()
            ->whereDate('expired_at', '<', now()->addWeek())
            ->count();

        if ($expired > 0) {
            $users = User::query()
                ->whereHas('roles', function ($q){
                    $q->whereIn('name', ['Developer']);
                })
                ->get();

            Notification::send($users, new \App\Notifications\ExpiredCertificates($expired));
        }
    }
}
