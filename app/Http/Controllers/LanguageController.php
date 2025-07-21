<?php

namespace App\Http\Controllers;

use App\Http\Enums\LanguageEnum;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LanguageController extends Controller
{
    public function changeLocale(Request $request)
    {
        $lang = $request->route('lang');
        if (in_array($lang, array_column(LanguageEnum::cases(), 'name'))) {
            session()->put('locale', $lang);
            return Inertia::location(url()->previous());
        }
        return back();
    }
}
