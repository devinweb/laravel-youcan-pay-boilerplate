<?php

namespace App\Listeners;

use Devinweb\LaravelYouCanPay\Events\WebhookReceived;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class YouCanPayEventListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(WebhookReceived $event)
    {
        if ($event->payload['event_name'] === 'transaction.paid') {
            Log::info(['paid' => $event->payload]);
        }

        if ($event->payload['event_name'] === 'transaction.failed') {
            Log::info(['failed' => $event->payload]);
        }
    }
}
