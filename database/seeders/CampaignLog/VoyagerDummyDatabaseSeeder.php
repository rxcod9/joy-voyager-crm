<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignLog;

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
            DummyCampaignLogsTableSeeder::class
        ]);
    }
}
