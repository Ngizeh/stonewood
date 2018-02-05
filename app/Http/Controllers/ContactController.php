<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
      return view('contact');
    }
    public function store(ContactRequest $request )
    {
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['phone_number'] = $request->get('phone_number');
        $contact['message'] = $request->get('message');

      \Mail::to('sales@homeassured.property')->send(new ContactMail($request));

        return back()->with('success', 'Thank you for contacting HomeAssured!');
    }
}
