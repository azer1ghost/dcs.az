<?php

namespace App\View\Components;

use Cache;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Training extends Component
{
    public Collection $trainings;

    public function __construct()
    {
        $this->trainings = Cache::remember("component_trainings", config('cache.timeout'), function (){
            return \App\Models\Training::query()->orderBy('order')->limit(3)->active()->get();
        });
    }

    public function render()
    {
        return view('website.components.training');
    }
}
