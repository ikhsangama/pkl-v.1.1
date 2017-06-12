<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

//Mail
use App\Mail\userOrder;
use Illuminate\Support\Facades\Mail;

class SendUserEmail
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
     * @param  BookingCreated  $event
     * @return void
     */
    public function handle(BookingCreated $event)
    {
      $user = $event->user;
      $booking = $event->booking;
      // dd($event->user->email, $event->booking);
      Mail::to($user->email)->send(new userOrder($user, $booking));

    }
}
