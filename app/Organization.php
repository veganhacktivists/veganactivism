<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Storage;
use Parsedown;
use Backpack\CRUD\CrudTrait;

class Organization extends Model
{
    use CrudTrait;

    protected $guarded = [];

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

    public function hasDetails()
    {
        return strlen($this->details) > 0;
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
  
    public function getDetailsAttribute($value)
    {
        $fileName = 'organizations_details/'.$this->attributes['slug'].'.md';
        if (Storage::disk('local')->exists($fileName)) {
            $contents = Storage::get($fileName);
        } else {
            $contents = '';
        }

        return new HtmlString(
            // @TODO Verify and set security options
            Parsedown::instance()->text($contents)
        );
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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
