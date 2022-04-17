<?php

namespace App\Widgets;

use App\Models\Certificate;
use TCG\Voyager\Widgets\BaseDimmer;

class CertificateDimmer extends BaseDimmer
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $certificates = Certificate::query()
            ->whereDate('expired_at', '<', now()->addDays(7))
            ->get();

        return 'Vaxti kecmekde olan sertifikatlarin sayi '. $certificates->count();

//        return view('voyager::dimmer', [
//            'icon'   => 'voyager-group',
//            'title'  => "{$count} students",
//            'text'   => 'Student',
//            'button' => [
//                'text' => 'Go to students',
//                'link' => route('voyager.students.index'),
//            ],
//            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
//        ]);
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed(): bool
    {
        return true;
    }
}
