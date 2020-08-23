<?php

use App\Models\Statictext;
use Illuminate\Support\Facades\App;

if (!function_exists('statictext')) {

    function statictext($page, $key) :string
    {

        $statics = Statictext::where('group', $page)->get()->translate('locale', App::getLocale());

        //Create empty array for static texts
        $static = array();

        //set static texts to array
        foreach ($statics as $text){
            $static[$text['key']] = $text['text'];
        }

        return $static[$key];
    }
}
