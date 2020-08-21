<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use TCG\Voyager\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.pages.main.index');
    }

    public function getPage($slug)
    {
        // Loads current locale translations
        $locale = App::getLocale();
        $page = Page::withTranslation($locale)->where('slug', $slug)->first();
        $page = $page->translate($locale);

        return view('frontend.pages.page.index',['page' => $page]);
    }
}
