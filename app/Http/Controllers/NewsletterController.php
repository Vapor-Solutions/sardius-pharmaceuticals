<?php

namespace App\Http\Controllers;

use App\Models\Subscribers;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function addSubscriber(Request $request){
        if($request->ajax()){
            $data = $request->all();

            $subscriberCount = Subscribers::where('email', $data['subscriber_email'])->count();
            if($subscriberCount > 0){
                return "exists";
            }else{
                //add newsletter subscriber in the subscribers table
                $newsletter = new Subscribers;
                $newsletter->email = $data['subscriber_email'];
                $newsletter->status = 1;
                $newsletter->save();

                return "Inserted";
            }
        }
    }
}
