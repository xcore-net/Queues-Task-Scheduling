<?php

namespace App\Http\Controllers;

use App\Jobs\MyCustomJob;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class QueueController extends Controller
{
    public function index()
    {
        for ($i = 0; $i < 10; $i++) {

            $job = new MyCustomJob("test i:".str($i));
            dispatch($job)->delay(now()->addSeconds(10+$i*$i));


            $job2 = new MyCustomJob("test2");
            dispatch($job2)->delay(now()->addSeconds(20+$i));
        }
        return view('queue');
    }

    public function insert(Request $request)
    {
        $job = new MyCustomJob($request->text);
        dispatch($job)->delay(now()->addSeconds(10));
        dispatch($job)->delay(now()->addSeconds(10));
    }

    public function sendEmail()
    {
        $job = new SendEmailJob();
        dispatch($job)->delay(now()->addSeconds(10));
    }
}
