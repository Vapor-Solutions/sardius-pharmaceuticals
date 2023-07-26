<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    // public function addSubscriber(Request $request){
    //     if($request->ajax()){
    //         $data = $request->all();

    //         $subscriberCount = Subscribers::where('email', $data['subscriber_email'])->count();
    //         if($subscriberCount > 0){
    //             return "exists";
    //         }else{
    //             //Add newsletter subscriber in the subscribers table

    //             $newsletter = new Subscribers;
    //             $newsletter->email = $data['subscriber_email'];
    //             $newsletter->status = 1;
    //             $newsletter->save();

    //             return "Inserted";
    //         }
    //     }
    // }

    public function addNewsletterSubscriber(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email|unique:subscribers,email'
            ]
        );

        $subscriber = new Subscribers();
        $subscriber->email = $request->email;
        $subscriber->status = 1;
        $subscriber->save();

        return redirect()->back()->with('done', 'Your have sucessfully subscribed to our newsletter');
    }
    
    public function unsubscribe(Request $request){
        $email = $request->input('email');
        $subscriber = Subscribers::where('email', $email)->first();

        if($subscriber){
            $subscriber->status = 0;
            $subscriber->save();
        }
        return redirect()->back()->with('done', 'Your have sucessfully unsubscribed to our newsletter');
    }
}
