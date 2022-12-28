<?php

namespace Joy\VoyagerCrm\Database\Seeders\Alert;

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
            DummyAlertsTableSeeder::class
        ]);
    }
}
