<?php

use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Post;

if (!function_exists('lastNews')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function lastNews($limit = null)
    {
        //Get latest blogs with local language and paginate
        return Post::withTranslation(App::getLocale())->published()->limit($limit)->get();
    }
}
