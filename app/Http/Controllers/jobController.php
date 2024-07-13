<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\redirectJob;

class jobController extends Controller
{
    public function dis(){

        dispatch(new redirectJob());
        return view('page');
    }

    
    // public function collections1(){
        
    //     $oxygen = collect(['O', 'O', 'O']);

    //     $hydrogen =collect( ['H', 'H', 'H']);
       
    //     $water=$hydrogen->take(2)->merge( $oxygen->take(1)
    //     );

    //     $collection = collect(['shahd', 'shams', null])->map(function (?string $name) {
    //         return strtoupper($name);
    //     })->reject(function (string $name) {
    //         return empty($name);
    //     });
    //     return view('page',['water'=>$water,'collection'=>$collection,]);
    // }

   

}
