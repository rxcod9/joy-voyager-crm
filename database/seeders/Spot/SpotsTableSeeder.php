<?php

namespace Joy\VoyagerCrm\Database\Seeders\Spot;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SpotsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Spot')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Spot')->factory()
            ->count($count)
            ->create();
    }
}
