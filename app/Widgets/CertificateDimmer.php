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
        $total = Certificate::query()->count();

        $expired = Certificate::query()
            ->whereDate('expired_at', '<', now()->addDays(7))
            ->count();

        $alert = $expired > 0;

        $text = $alert ? "<b class='text-danger'>{$expired} Certtificate expired in one week</b>" : 'Certificate' ;

        return view('voyager::widgets.certificates', [
            'icon'   => 'voyager-documentation',
            'title'  => "{$total} Certificate",
            'text'   => $text,
            'alert'  => $alert,
            'button' => [
                'text' => 'Go to Certificates',
                'link' => route('voyager.certificates.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]);
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
