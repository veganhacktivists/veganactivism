<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgnaization extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
