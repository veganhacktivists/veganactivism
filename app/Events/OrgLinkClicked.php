<?php

namespace App\Events;

use App\Organization;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrgLinkClicked
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;

    private $organization;

    private $user;

    /**
     * Create a new event instance.
     */
    public function __construct(Organization $organization, Authenticatable $user)
    {
        $this->organization = $organization;

        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('org-link-clicks');
    }
}
