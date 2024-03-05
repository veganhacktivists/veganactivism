<?php

namespace App\Events;

use App\Models\Organization;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;

class OrgLinkClicked
{
    use Dispatchable;
    use SerializesModels;

    public $organization;

    public $user;

    /**
     * Create a new event instance.
     */
    public function __construct(Organization $organization, $user)
    {
        $this->organization = $organization;

        $this->user = $user;
    }
}
