<?php

namespace App\Models;

use App\Organization;
use App\User;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;

class BackpackUser extends User
{
    use CrudTrait;
    use HasRoles;
    use HasFactory;

    protected $table = 'users';

    const ROLE_SUPER_ADMIN = 'Super Admin';
    const ROLE_ADMIN = 'Organization Admin';

    // Permissions for Users
    const PERMISSION_USERS_VIEW = 'View Users';
    const PERMISSION_USERS_CREATE = 'Create Users';
    const PERMISSION_USERS_EDIT = 'Edit Users';
    const PERMISSION_USERS_DELETE = 'Delete Users';

    // Permissions for Organizations
    const PERMISSION_ORGANIZATIONS_VIEW = 'View Organizations';
    const PERMISSION_ORGANIZATIONS_CREATE = 'Create Organizations';
    const PERMISSION_ORGANIZATIONS_EDIT = 'Edit Orgnizations';
    const PERMISSION_ORGANIZATIONS_DELETE = 'Delete Organizations';

    // Permissions for Links
    const PERMISSION_LINKS_VIEW = 'View Links';
    const PERMISSION_LINKS_CREATE = 'Create Links';
    const PERMISSION_LINKS_EDIT = 'Edit Links';
    const PERMISSION_LINKS_DELETE = 'Delete Links';

    // Permission for Navbar
    const PERMISSION_NAVBAR_VIEW = 'View Navbar';

    /**
     * Send the password reset notification.
     *
     * @param string $token
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    public function canEdit(Organization $organization)
    {
        return $this->can(self::PERMISSION_ORGANIZATIONS_EDIT)
            || $this->organizations->contains($organization);
    }
}
