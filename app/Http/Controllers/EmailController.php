<?php

namespace App\Http\Controllers;
use App\Mail\testEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class EmailController extends Controller
{
    public function sendTestEmail()
    {
         $text = "hii";
        Mail::to('xxxszcbn@gmail.com')->send(new testEmail($text));

        return "Email sent successfully!";
    }
}

