<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use CrudTrait;

    const TYPE_WEBSITE = 'website';
    const TYPE_EVENTS = 'events';
    const TYPE_CONTACT = 'contact';
    const TYPE_TWITTER = 'twitter';
    const TYPE_INSTAGRAM = 'instagram';
    const TYPE_PATREON = 'patreon';
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_VOLUNTEER = 'volunteer';
    const TYPE_YOUTUBE = 'youtube';
    const TYPE_REDDIT = 'reddit';
    const TYPE_NEWSLETTER = 'newsletter';
    const TYPE_EMAIL = 'email';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['organization_id', 'url', 'click_count', 'type'];

    /**
     * Get the organization that owns the link.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
