<?php

namespace App\View\Components;

use Cache;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Services extends Component
{
    public Collection $services;

    public function __construct()
    {
        $this->services = Cache::remember("component_services", config('cache.timeout'), function (){
            return \App\Models\Service::active()->orderBy('order')->get();
        });
    }

    public function render()
    {
        return view('website.components.services');
    }
}
