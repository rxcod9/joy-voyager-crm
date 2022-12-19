<?php

namespace Joy\VoyagerCrm\Database\Seeders\UserPreference;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyUserPreferencesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('UserPreference')->factory()
            ->count($count)
            ->create();
    }
}
