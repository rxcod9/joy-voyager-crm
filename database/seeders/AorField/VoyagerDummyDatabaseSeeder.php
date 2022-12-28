<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorField;

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
            DummyAorFieldsTableSeeder::class
        ]);
    }
}
