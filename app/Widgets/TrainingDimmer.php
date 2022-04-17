<?php

namespace App\Widgets;

use App\Models\Student;
use App\Models\Training;
use TCG\Voyager\Widgets\BaseDimmer;

class TrainingDimmer extends BaseDimmer
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Training::query()->count();

        return view('voyager::dimmer', [
            'icon'   => 'voyager-study',
            'title'  => "{$count} trainings",
            'text'   => 'Trainings',
            'button' => [
                'text' => 'Go to trainings',
                'link' => route('voyager.trainings.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
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
