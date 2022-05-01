<?php

namespace App\Jobs;

use App\Models\Certificate;
use App\Models\Company;
use App\Models\Student;
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
        $companies = Company::query()
            ->withCount(['certificates' => fn($q) => $q->expiredIn(7)])
            ->whereHas('certificates', fn($q) => $q->expiredIn(7))
            ->get();

        $students = Student::query()
            ->withCount(['certificates' => fn($q) => $q->expiredIn(7)])
            ->whereHas('certificates', fn($q) => $q->expiredIn(7))
            ->get();

        //certificates_count

        $expired = Certificate::expiredIn(7)->count();

        if ($expired > 0) {
            $users = User::query()
                ->whereHas('role', function ($q){
                    $q->whereIn('name', ['developer', 'admin']);
                })
                ->get();

            Notification::send($users, new \App\Notifications\ExpiredCertificates($expired));
        }
    }
}
