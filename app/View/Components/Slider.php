<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Slider extends Component
{
    public Collection $sliders;

    public function __construct()
    {
        $this->sliders = \App\Models\Slide::active()->orderBy('order')->get();
    }

    public function render()
    {
        return view('website.components.slider');
    }
}
