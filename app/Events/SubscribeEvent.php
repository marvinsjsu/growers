<?php

namespace App\Events;

use App\Subscription;
use Illuminate\Queue\SerializesModels;

class SubscribeEvent
{
    use SerializesModels;

    public $subscription;

    /**
     * Create a new event instance.
     *
     * @param  Order  $order
     * @return void
     */
    public function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }
}