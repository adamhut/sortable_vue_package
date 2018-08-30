<?php

namespace Adamhut\Achievements\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class UserEarnedExperience
{
    use Dispatchable,  SerializesModels;

	public $user;

	public $points;

	protected $totalPoints;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user, $points, $totalPoints)
    {
        //        
        $this->user = $user;
        $this->points = $points;
        $this->totalPoints = $totalPoints;
    }

   
}
