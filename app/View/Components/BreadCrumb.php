<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public string $title;
    public ?string $banner;

    public function __construct($title, $banner = null)
    {
        $this->title = $title;
        $this->banner = $banner;
    }

    public function render()
    {
        return view('website.components.bread-crumb');
    }
}
