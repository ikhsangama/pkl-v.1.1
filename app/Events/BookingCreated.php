<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
//TAMBAHAN
use App\User;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Schedule;
use App\Models\Inf_lokasi;

class BookingCreated
{
    use InteractsWithSockets, SerializesModels;

    public $schedule;
    public $lokasi;
    public $booking;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Booking $booking, User $user, Inf_lokasi $lokasi, Schedule $schedule)
    {
      $this->user = $user;
      $this->lokasi = $lokasi;
      $this->booking = $booking;
      $this->schedule = $schedule;
      // dd($this);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
