<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public string $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('website.components.bread-crumb');
    }
}
