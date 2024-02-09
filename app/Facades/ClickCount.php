<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class ClickCount extends Facade
{
    public static function getAllClicks()
    {
        $clicks = \App\Models\Link::all();
        $total = 0;
        foreach ($clicks as $click) {
            $total += $click->click_count;
        }

        return $total;
    }
}
