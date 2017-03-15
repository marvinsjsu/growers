<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;
use App\Events\SubscribeEvent;
use Uuid;

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {
	    $this->validate($request, [
	        'email' => 'required|email|unique:subscriptions',
	    ]);   	

        $subscription = Subscription::firstOrCreate([
    		'email' => $request['email'],
    		'status' => "subscribe",
            'uuid' => Uuid::generate(),
        ]);

        event(new SubscribeEvent($subscription));

        return redirect("/");
    }

    public function activate($id) 
    {

        $subscription = Subscription::where('uuid', $id);

        if (!empty($subscription)) {

            $subscription->update(['status' => "activated"]);
            return redirect('/blog')->with('success', 'Welcome, your subscription has been activated.'); 
        } else {
     
            return redirect()->route('posts.index')->with('fail', 'Something went wrong, please try again at another time.'); 
        }
    }
    public function deactivate($id)
    {
         $subscription = Subscription::where('uuid', $id);

        if (!empty($subscription)) {
     
            $subscription->update(['status' => "deactivated"]);
            return redirect('/blog')->with('success', 'Welcome, your subscription has been deactivated.'); 
        } else {
     
            return redirect()->route('posts.index')->with('fail', 'Something went wrong, please try again at another time.'); 
        }       
    }

    public function test($view) 
    {

        return view('emails.activation');
    }
}
