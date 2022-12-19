<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventLocation;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyFpEventLocationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('FpEventLocation')->factory()
            ->count($count)
            ->create();
    }
}
