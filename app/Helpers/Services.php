<?php

use App\Models\Ourservice;
use Illuminate\Support\Facades\App;

if (!function_exists('getServices')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function getServices($limit = 4)
    {
        //Get services with local language
        return Ourservice::all()
                ->sortBy('order')
                ->skip(0)
                ->take($limit)
                ->translate('locale', App::getLocale());
    }
}
