<?php

use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Post;

if (!function_exists('lastNews')) {

    /**
     * description
     *
     * @param null $limit
     * @param null $lang
     * @return
     */
    function lastNews($limit = null, $lang = null) :object
    {
        $lang ? $lang = $lang : $lang = App::getLocale();

        //Get latest blogs with local language and paginate
        return Post::published()->limit($limit)->latest()->get()->translate('locale', $lang);
    }
}
