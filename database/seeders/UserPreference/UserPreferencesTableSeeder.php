<?php

namespace Joy\VoyagerCrm\Database\Seeders\UserPreference;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class UserPreferencesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('UserPreference')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('UserPreference')->factory()
            ->count($count)
            ->create();
    }
}
