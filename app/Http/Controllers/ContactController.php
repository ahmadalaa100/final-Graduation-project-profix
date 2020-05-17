<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    //
    public function contact(){
        return view("contact");
    }

    public function send(Request $request)
    {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->mail = $request->mail;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back();
    }
}
