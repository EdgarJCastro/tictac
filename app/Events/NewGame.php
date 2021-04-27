<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class NewGame implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $destinationUserId;
    public $gameId;
    public $from;

    /**
     * Crea una nueva instancia de evento.
     *
     * @return void
     */
    public function __construct($destinationUserId, $gameId, $from)
    {
        $this->destinationUserId = $destinationUserId;
        $this->gameId = $gameId;
        $this->from = $from;
    }

    /**
     * Obtenga los canales en los que debe transmitirse el evento.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('new-game-channel');
    }
}
