<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    const TYPE_WEBSITE = 'website';
    const TYPE_TWITTER = 'twitter';
    const TYPE_INSTAGRAM = 'instagram';
    const TYPE_PATREON = 'patreon';
    const TYPE_FACEBOOK = 'facebook';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['organization_id', 'url', 'click_count'];

    /**
     * Get the organization that owns the link.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Increment the click count for the link
     */
    public function incrementClickCount()
    {
        $this->click_count++;
        $this->save();
    }
}
