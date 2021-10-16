<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Training extends Component
{
    public Collection $trainings;

    public function __construct()
    {
        $this->trainings = \App\Models\Training::active()->orderBy('order')->get();
    }

    public function render()
    {
        return view('website.components.training');
    }
}
