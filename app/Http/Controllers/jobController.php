<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\redirectJob;

class jobController extends Controller
{
    public function dis(){
        dispatch(new redirectJob('page'));
        return view('page');
    }
}
