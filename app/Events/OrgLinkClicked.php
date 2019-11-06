<?php

namespace App\Events;

use App\Organization;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class OrgLinkClicked
{
    use Dispatchable;
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
}
