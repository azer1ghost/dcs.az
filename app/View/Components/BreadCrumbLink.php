<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BreadCrumbLink extends Component
{
    public bool $isCurrent;
    public ?string $link = null;

    public function __construct($link = null)
    {
        $this->isCurrent = is_null($link);
        $this->link = $link;
    }

    public function render()
    {
        return view('website.components.bread-crumb-link');
    }
}
