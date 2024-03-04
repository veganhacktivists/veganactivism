<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web', config('backpack.base.middleware_key', 'admin')],
    'namespace' => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('organization', 'OrganizationCrudController');
    Route::crud('link', 'LinkCrudController');
    // Route::crud('idea', 'IdeaCrudController');
    // Route::resource('youtubevideo', 'YoutubeVideoCrudController');
}); // this should be the absolute last line of this file
