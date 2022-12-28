<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorCondition;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAorConditionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AorCondition')->factory()
            ->count($count)
            ->create();
    }
}
