<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     * Retrieve the organization's links
     */
    public function links()
    {
        return $this->hasMany(Link::class);
    }

    /**
     * Retrieve the organization's website
     */
    public function website()
    {
        return $this->links()->where('type', Link::TYPE_WEBSITE);
    }
}
