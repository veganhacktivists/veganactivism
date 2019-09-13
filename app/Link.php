<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['organization_id', 'url', 'clicks'];

    /**
     * Get the organization that owns the link.
     */
    public function organization()
    {
        return $this->belongsTo('App\Organization');
    }
}
