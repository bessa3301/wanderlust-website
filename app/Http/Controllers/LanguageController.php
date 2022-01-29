<?php

namespace App\Http\Controllers;

use App\Enum\LangsEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang($lang, Request $request)
    {
        session(['lang' => $lang]);
        logger($request->session()->has('lang'));
        return Redirect::back();
    }
}
