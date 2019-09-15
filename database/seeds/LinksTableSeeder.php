<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Link::class, 2)->create();
        factory(App\Link::class, 2)->create(['organization_id' => 2]);
    }
}
