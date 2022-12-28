<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowCondition;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAowConditionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AowCondition')->factory()
            ->count($count)
            ->create();
    }
}
