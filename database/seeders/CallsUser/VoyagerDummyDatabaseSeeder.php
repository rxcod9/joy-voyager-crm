<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsUser;

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
            DummyCallsUsersTableSeeder::class
        ]);
    }
}
