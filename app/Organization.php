<?php

namespace App;

use App\Models\YoutubeVideo;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Storage;
use Parsedown;

class Organization extends Model
{
    use CrudTrait;

    protected $guarded = [];

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeNotFeatured($query)
    {
        return $query->where('featured', false);
    }

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
        if ($this->website()) {
            return $this->website()->url;
        }

        return '';
    }

    /**
     * Access the website clicks as if it is an included column.
     * $organization->website_clicks;.
     */
    public function getWebsiteClicksAttribute()
    {
        if ($this->website()) {
            return $this->website()->click_count;
        }

        return 0;
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

    public function youtubeVideos()
    {
        return $this->hasMany(YoutubeVideo::class);
    }
}
