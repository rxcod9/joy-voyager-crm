<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorChart;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAorChartsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AorChart')->factory()
            ->count($count)
            ->create();
    }
}
