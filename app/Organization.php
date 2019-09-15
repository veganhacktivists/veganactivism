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
     * Retrieve the organization's website.
     */
    public function website()
    {
        return $this->links()->where('type', Link::TYPE_WEBSITE)->first();
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
