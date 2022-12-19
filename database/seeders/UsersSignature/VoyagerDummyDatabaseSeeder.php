<?php

namespace Joy\VoyagerCrm\Database\Seeders\UsersSignature;

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
            DummyUsersSignaturesTableSeeder::class
        ]);
    }
}
