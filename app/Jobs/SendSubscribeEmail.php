<?php

namespace App\Jobs;

use App\Subscription;
use App\Mail\SubscriptionActivationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendSubscribeEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $subscription;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $subscriptionActivationEmail = new SubscriptionActivationEmail($this->subscription);
        Mail::to($this->subscription->email)->send($subscriptionActivationEmail);
    }
}
