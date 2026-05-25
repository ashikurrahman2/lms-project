<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    protected array $supportedLocales = ['en', 'de', 'it', 'es', 'ru', 'hi', 'ar', 'bn']; 

    public function switch(Request $request, string $locale)
    {
        if (!in_array($locale, $this->supportedLocales)) {
            abort(400, 'Unsupported locale.');
        }

        Session::put('locale', $locale);

        return redirect()->back()->withHeaders([
            'Cache-Control' => 'no-cache, no-store',
        ]);
    }
}