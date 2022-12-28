<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmTasktemplate;

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
            DummyAmTasktemplatesTableSeeder::class
        ]);
    }
}
