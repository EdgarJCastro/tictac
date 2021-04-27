<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class Play implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $gameId;
    public $type;
    public $location;
    public $userId;

    /**
     * Crea una nueva instancia de evento.
     *
     * @return void
     */
    public function __construct($gameId, $type, $location, $userId)
    {
        $this->gameId = $gameId;
        $this->type = $type;
        $this->location = $location;
        $this->userId = $userId;
    }

    /**
     * Obtenga los canales en los que debe transmitirse el evento.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('game-channel-' . $this->gameId . '-' . $this->userId);
    }
}
