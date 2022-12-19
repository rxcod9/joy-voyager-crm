<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventLocation;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class FpEventLocationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('FpEventLocation')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('FpEventLocation')->factory()
            ->count($count)
            ->create();
    }
}
