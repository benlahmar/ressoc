<?php

namespace App\Observers;

use App\Models\Consultation;

class ConsultationObserver
{
    /**
     * Handle the Consultation "created" event.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return void
     */
    public function created(Consultation $consultation)
    {
       // $consultation->titre= '--'.$consultation->titre;
        //$consultation->save();
        //processing 

    }


    public function creating(Consultation $consultation)
    {
        $consultation->descript= '****'.$consultation->descript;
    }

    /**
     * Handle the Consultation "updated" event.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return void
     */
    public function updated(Consultation $consultation)
    {
        //
    }

    /**
     * Handle the Consultation "deleted" event.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return void
     */
    public function deleted(Consultation $consultation)
    {
        //
    }

    /**
     * Handle the Consultation "restored" event.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return void
     */
    public function restored(Consultation $consultation)
    {
        //
    }

    /**
     * Handle the Consultation "force deleted" event.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return void
     */
    public function forceDeleted(Consultation $consultation)
    {
        //
    }
}
