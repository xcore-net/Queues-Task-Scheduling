<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;


class FlowerController extends Controller
{
  public function index()
  {

  
    if (Cache::has('key')) {
        $flower = Cache::get('key');
    } else {
        // Data not found in the cache, fetch it from the original source and cache it.
        // $flowers = fetchDataFromDatabase();
        $flower = DB::table('flowers')->get();
        Cache::put('key', $flower, 500);
    }
    return response()->json($flower);
   
}

  }


  