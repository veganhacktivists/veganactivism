<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class VisitorRegistryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 6286; ++$i) {
            DB::table('visitor_registry')->insert([
                'ip' => $faker->ipv4,
                'clicks' => 0,
                'country' => 'US',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
