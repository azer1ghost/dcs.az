<?php

use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Category;

if (!function_exists('Categories')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function Categories()
    {
        return Category::all()->translate('locale', App::getLocale());
    }
}
