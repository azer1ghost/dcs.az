<?php

namespace App\View\Components;

use Cache;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Slider extends Component
{
    public Collection $sliders;

    public function __construct()
    {
        $this->sliders = Cache::remember("component_sliders", config('cache.timeout'), function (){
            return \App\Models\Slide::active()->orderBy('order')->get();
        });
    }

    public function render()
    {
        return view('website.components.slider');
    }
}
