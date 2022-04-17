<?php

namespace App\Widgets;

use App\Models\Student;
use TCG\Voyager\Widgets\BaseDimmer;

class StudentDimmer extends BaseDimmer
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Student::query()->count();

        return view('voyager::dimmer', [
            'icon'   => 'voyager-group',
            'title'  => "{$count} students",
            'text'   => 'Students',
            'button' => [
                'text' => 'Go to students',
                'link' => route('voyager.students.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/01.jpg'),
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
