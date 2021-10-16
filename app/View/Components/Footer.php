<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Footer extends Component
{

    public Collection $socials;
    public Collection $services;
    public function __construct()
    {
        $this->socials = \App\Models\Social::active()->orderBy('order')->get();
        $this->services = \App\Models\Service::active()->orderBy('order')->get();
    }

    public function render()
    {
        return view('website.components.footer');
    }
}
