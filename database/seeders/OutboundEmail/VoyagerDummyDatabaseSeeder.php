<?php

namespace Joy\VoyagerCrm\Database\Seeders\OutboundEmail;

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
            DummyOutboundEmailsTableSeeder::class
        ]);
    }
}
