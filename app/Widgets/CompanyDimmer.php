<?php

namespace App\Widgets;

use App\Models\Company;
use TCG\Voyager\Widgets\BaseDimmer;

class CompanyDimmer extends BaseDimmer
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Company::query()->count();

        return view('voyager::dimmer', [
            'icon'   => 'voyager-company',
            'title'  => "{$count} companies",
            'text'   => 'Companies',
            'button' => [
                'text' => 'Go to companies',
                'link' => route('voyager.companies.index'),
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
