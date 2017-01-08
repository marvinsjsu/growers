<?php

namespace App\Listeners;

use App\Events\SubscribeEvent;
use App\Mail\SubscriptionActivationEmail;
use Illuminate\Support\Facades\Mail;

class SendSubscriptionActivationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderShipped  $event
     * @return void
     */
    public function handle(SubscribeEvent $event)
    {
        $subscription = $event->subscription;
        $subscriptionActivationEmail = new SubscriptionActivationEmail($subscription);
        Mail::to($subscription->email)->queue($subscriptionActivationEmail);
    }
}