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
      // dd($event);
      $user = $event->user;
      $lokasi = $event->lokasi;
      $booking = $event->booking;
      $schedule = $event->schedule;
      // dd($event->user->email, $event->booking, $event->lokasi);
      Mail::to($user->email)->send(new userOrder($user, $booking, $lokasi, $schedule));

    }
}
