<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DummyJjwgAddressCachesTableSeeder::class
        ]);
    }
}
