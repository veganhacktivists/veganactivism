<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Link extends Model
{
    use CrudTrait;
    
    const TYPE_WEBSITE = 'website';
    const TYPE_TWITTER = 'twitter';
    const TYPE_INSTAGRAM = 'instagram';
    const TYPE_PATREON = 'patreon';
    const TYPE_FACEBOOK = 'facebook';
    const TYPE_YOUTUBE = 'youtube';

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
}
