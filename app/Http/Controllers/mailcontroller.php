<?php

namespace App\Http\Controllers;

// use Mail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\demomail;

class mailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $maildata = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('faisalnadeem034372@gmail.com')->send(new demomail($maildata));
        return redirect()->back()->with('success', 'Your message has been sent. Thank you!');


    }

}
