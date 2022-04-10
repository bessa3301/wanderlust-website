<?php

namespace App\Http\Controllers;

use App\Models\TermsAndConditions;
use Illuminate\Support\Facades\App;

class WebsiteController extends Controller
{
    public function termsAndConditions()
    {
        logger(App::getLocale());
        $term = TermsAndConditions::where('lang', App::getLocale())->first();
        return view('terms-and-conditions', [
            'term' => $term->term,
        ]);
    }
}
