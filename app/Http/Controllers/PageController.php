<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
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
        $slides = Sliders::all()->translate('locale', App::getLocale());

        return view('frontend.pages.main.index', compact('slides'));
    }

    public function getPage($slug)
    {
        //get page content with local language
        $page = Page::where('slug', $slug)
                    ->first()
                    ->translate('locale', App::getLocale());

        return view('frontend.pages.page.index', compact('page'));
    }
}
