<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
    $validate = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'tel' => ['required'],
            'email' => ['required'],
            'message' => ['required']
        ]);

        $contact = new Contact;
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->phone_number = $request->tel;
        $contact->message = $request->message;
        $contact->save();

        // dd($request->message);
    }
    
}
