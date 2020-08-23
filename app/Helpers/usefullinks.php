<?php
use App\Models\Usefullink;
use Illuminate\Support\Facades\App;
if (!function_exists('useful_links')) {


    function useful_links()
    {
        $useful_links = null;
        $useful_links = Usefullink::all()->translate('locale', App::getLocale());
        return $useful_links;
    }
}
