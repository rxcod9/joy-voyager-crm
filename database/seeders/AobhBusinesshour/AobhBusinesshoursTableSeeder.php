<?php

namespace Joy\VoyagerCrm\Database\Seeders\AobhBusinesshour;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AobhBusinesshoursTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AobhBusinesshour')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AobhBusinesshour')->factory()
            ->count($count)
            ->create();
    }
}
