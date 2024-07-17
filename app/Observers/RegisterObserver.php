<?php

namespace App\Observers;

use App\Jobs\Email;
use App\Mail\RegisterMail;
use App\Models\Broker;

class RegisterObserver
{
    /**
     * Handle the Broker "created" event.
     */
    public function created(Broker $broker): void
    {
        //
    }

    /**
     * Handle the Broker "updated" event.
     */
    public function updated(Broker $broker): void
    {
        //
    }

    /**
     * Handle the Broker "deleted" event.
     */
    public function deleted(Broker $broker): void
    {
        //
    }

    /**
     * Handle the Broker "restored" event.
     */
    public function restored(Broker $broker): void
    {
        //
    }

    /**
     * Handle the Broker "force deleted" event.
     */
    public function forceDeleted(Broker $broker): void
    {
        //
    }
}
