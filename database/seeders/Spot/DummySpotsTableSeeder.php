<?php

namespace Joy\VoyagerCrm\Database\Seeders\Spot;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySpotsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Spot')->factory()
            ->count($count)
            ->create();
    }
}
