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

    /**
     * Access the website as if it is an included column.
     * $organization->website_url;.
     */
    public function getWebsiteUrlAttribute()
    {
        return $this->website()->url;
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

        return $default;
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
}
