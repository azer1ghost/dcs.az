<?php

namespace App\Http\Controllers;

use App\Models\Ourservice;
use App\Models\Sliders;
use App\Models\Statictext;
use App\Models\Works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function index(Request $request)
    {
        //Set locale
        App::setLocale(explode("/", $request->getRequestUri())[1]);

        //Get slider with local language
        $slides = Sliders::all()->sortBy('order')->translate('locale', App::getLocale());

        //Get services with local language
        $services = Ourservice::all()->sortBy('order')->translate('locale', App::getLocale());

        //Get works with local language
        $feature = Works::all()->first()->translate('locale', App::getLocale());

        //Return home page
        return view('frontend.pages.main.index', compact(['slides','services','feature']));
    }

    public function getPage($slug)
    {
        //get page content with local language
        $page = Page::where('slug', $slug)->first()
                    ->translate('locale', App::getLocale());

        //Get services with local language
        $services = Ourservice::all()->sortBy('order')->translate('locale', App::getLocale());

        //Return page
        return view('frontend.pages.page.index', compact(['page','services']));
    }
}
