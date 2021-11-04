<?php

namespace App\Listeners;

use App\Events\CarCreatedEvent;
use App\Models\Cars;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CarCreatedListener implements ShouldQueue
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
     * @param  CarCreatedEvent  $event
     * @return void
     */
    public function handle(CarCreatedEvent $event)
    {


        \Log::info('USER_CREATED_LISTENER',[
            'user_id'=>$event->cars->id,
            'email'=>$event->cars->email,
        ]);
        \Log::info('Sending user email... ');
    }
}
