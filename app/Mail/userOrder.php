<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
// TAMBAHAN
use App\User; //Pakai model user
use App\Models\Booking;
use App\Models\Schedule;
use App\Models\Inf_lokasi;

class userOrder extends Mailable
{
    use Queueable, SerializesModels;
    public $schedule;
    public $user;
    public $booking;
    public $lokasi;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Booking $booking, Inf_lokasi $lokasi, Schedule $schedule)
    {
        $this->user = $user;
        $this->lokasi = $lokasi;
        $this->booking = $booking;
        $this->schedule = $schedule;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.order');
    }
}
