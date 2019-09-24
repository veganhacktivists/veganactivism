<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $guarded = [];

    protected $casts = ['about' => 'array', 'activism' => 'array'];

    /**
     * Retrieve the organization's links.
     */
    public function links()
    {
        return $this->hasMany(Link::class);
    }

    /**
     * Retrieve the organization's website eloquent model.
     * To get the url, add ->url; to this method call.
     */
    public function website()
    {
        return $this->links()->where('type', Link::TYPE_WEBSITE)->first();
    }

    /**
     * Access the website as if it is an included column.
     * $organization->website_url;.
     */
    public function getWebsiteUrlAttribute()
    {
        return $this->website()->url;
    }

    /**
     * Access the website clicks as if it is an included column.
     * $organization->website_clicks;.
     */
    public function getWebsiteClicksAttribute()
    {
        return $this->website()->click_count;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function toArray()
    {
        $default = parent::toArray();

        $default['show_route'] = route('organizations.show', $this);

        $default['website_url'] = $this->website_url;

        $default['website_clicks'] = $this->website_clicks;

        return $default;
    }
}
