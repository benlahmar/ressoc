<?php

namespace App\Listeners;

use App\Events\ConsultationCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class consultationCreatedListenner
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
     * @param  \App\Events\ConsultationCreated  $event
     * @return void
     */
    public function handle(ConsultationCreated $event)
    {
        
    }
}
