<?php

namespace App\View\Components;

use Cache;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Footer extends Component
{

    public Collection $socials;
    public Collection $services;
    public $meta;

    public function __construct()
    {
        $this->meta = meta('homepage');
        $this->socials = Cache::remember("component_footer_socials", config('cache.timeout'), function (){
            return \App\Models\Social::active()->orderBy('ordering')->get();
        });
        $this->services = Cache::remember("component_footer_services", config('cache.timeout'), function (){
            return \App\Models\Service::active()->orderBy('order')->get();
        });
    }

    public function render()
    {
        return view('website.components.footer');
    }
}
