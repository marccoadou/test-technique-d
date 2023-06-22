<?php

namespace App\Providers;

use App\Actions\Prize\PickPrizeForUser;

class PickPrizeEvent
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserCreated $event): void
    {
        PickPrizeForUser::handle($event->user);
    }
}
