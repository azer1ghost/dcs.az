<?php

namespace App\Jobs;

use App\Models\Certificate;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Notification;

class ExpiredCertificates
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
                ->whereHas('role', function ($q){
                    $q->whereIn('name', ['developer']);
                })
                ->get();

            Notification::send($users, new \App\Notifications\ExpiredCertificates($expired));
        }
    }
}
