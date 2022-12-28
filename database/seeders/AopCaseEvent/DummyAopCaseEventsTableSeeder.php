<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseEvent;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAopCaseEventsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AopCaseEvent')->factory()
            ->count($count)
            ->create();
    }
}
