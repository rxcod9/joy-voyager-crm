<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorChart;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AorChartsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AorChart')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AorChart')->factory()
            ->count($count)
            ->create();
    }
}
