<?php

namespace App\Observers;

use App\Models\card;

class CardObserver
{
    public function creating(card $card)
    {
        $card->total_price = $card->quantity * $card->pay;
    }
    /**
     * Handle the card "created" event.
     *
     * @param  \App\Models\card  $card
     * @return void
     */
    public function created(card $card)
    {
        //
    }

    /**
     * Handle the card "updated" event.
     *
     * @param  \App\Models\card  $card
     * @return void
     */
    public function updated(card $card)
    {
        //
    }

    /**
     * Handle the card "deleted" event.
     *
     * @param  \App\Models\card  $card
     * @return void
     */
    public function deleted(card $card)
    {
        //
    }

    /**
     * Handle the card "restored" event.
     *
     * @param  \App\Models\card  $card
     * @return void
     */
    public function restored(card $card)
    {
        //
    }

    /**
     * Handle the card "force deleted" event.
     *
     * @param  \App\Models\card  $card
     * @return void
     */
    public function forceDeleted(card $card)
    {
        //
    }
}
