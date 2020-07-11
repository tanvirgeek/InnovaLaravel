<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|max:50',
            'email'     => 'required',
            'message'   => 'required',
        ]);

        Mail::send(new ContactMail($request->name, $request->email, $request->message));

        return view('contact')->with(['success' => 'Email Sent Successful']);
    }
}
