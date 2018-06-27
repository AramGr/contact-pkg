<?php

namespace Aram\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Aram\Contact\Mail\ContactMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact')->withTitle('Contact us');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
        return redirect(route('contact'));
    }
}
