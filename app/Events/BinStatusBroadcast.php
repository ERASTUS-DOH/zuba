<?php

namespace App\Events;

use App\BinRequest;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class BinStatusBroadcast implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * binRequest
     */

    private $binRequest;


    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct( BinRequest $binRequest )
    {
       $this->binRequest = $binRequest;
    }



    /**
     * The event's broadcast name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'bin.status';
    }


    public function broadcastWith()
    {
        //
        return [
            'request_id' => $this->binRequest->id,
            'bin_id' => $this->binRequest->bin_id,
            'bin_loc_long'=> $this->binRequest->location_long,
            'bin_loc_lat' => $this->binRequest->location_lat
        ];
    }


    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('bin-status');
    }
}
