<?php

namespace App\View\Components;

use Cache;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Counters extends Component
{
    public Collection $counters;

    public function __construct()
    {
        $this->counters = Cache::remember("component_counters", config('cache.timeout'), function (){
            return  \App\Models\Counter::active()->orderBy('order')->get();
        });
    }

    public function render()
    {
        return view('website.components.counters');
    }
}
