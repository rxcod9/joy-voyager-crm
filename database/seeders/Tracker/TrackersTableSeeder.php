<?php

namespace Joy\VoyagerCrm\Database\Seeders\Tracker;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class TrackersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Tracker')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Tracker')->factory()
            ->count($count)
            ->create();
    }
}
