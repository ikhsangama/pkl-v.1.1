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
use App\Models\Customer;
use App\Models\Booking;

class BookingCreated
{
    use InteractsWithSockets, SerializesModels;

    public $booking;
    public $user;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Booking $booking, User $user)
    {
      // dd($this->booking = $booking);
      $this->booking = $booking;
      $this->user = $user;
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
