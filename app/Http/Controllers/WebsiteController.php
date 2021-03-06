<?php

namespace App\Http\Controllers;

use App\Models\TermsAndConditions;
use Illuminate\Support\Facades\App;

class WebsiteController extends Controller
{
    public function index()
    {
        logger(App::getLocale());
        return view('welcome');
    }

    public function aboutUs()
    {
        return view('about-us');
    }

    public function termsAndConditions()
    {
        logger(App::getLocale());
        $term = TermsAndConditions::where('lang', App::getLocale())->first();
        return view('terms-and-conditions', [
            'term' => $term->term,
        ]);
    }

    public function getInvolved()
    {
        return view('get-involved');
    }

    public function apply()
    {
        return view('apply');
    }
}
