<?php

namespace App\Providers;

use App\Events\CarCreatedEvent;
use App\Events\UserCreatedEvent;
use App\Listeners\CarCreatedListener;
use App\Listeners\UserCreatedListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        UserCreatedEvent::class => [
            UserCreatedListener::class
        ],
        CarCreatedEvent::class => [
            CarCreatedListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
