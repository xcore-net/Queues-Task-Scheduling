<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Context;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller

{
    public function change(Request $request)
    {
        $lang = $request->input('lang');

        if (!in_array($lang, ['en', 'ar'])) {

            abort(400);
        }

        Session::put('locale', $lang);

        return redirect()->back();
    }

    public function getLang(){
        $lang = Context::get('locale');
        Log::info('LOG');
        return response()->json($lang);
    }
}