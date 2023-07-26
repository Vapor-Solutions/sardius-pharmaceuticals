<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUsDetails(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'phone_number' => 'required|unique:contacts,phone_number',
                'email'  => 'required|email|unique:contacts,email',
                'subject'  => 'required',
                'message'  => 'required',
            ]);

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->phone_number = $request->phone_number;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->message = $request->message;

            $contact->save();

            return redirect()->back()->with('success', 'Your contact and message have been sent successfully. We will contact you shorly');
    }

}
