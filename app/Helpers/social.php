<?php

use App\Models\Social;
use Illuminate\Support\Facades\App;

if (!function_exists('socials')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function socials()
    {
        $social = null;
        $social = Social::all()->sortBy('order');
        return $social;
    }
}
