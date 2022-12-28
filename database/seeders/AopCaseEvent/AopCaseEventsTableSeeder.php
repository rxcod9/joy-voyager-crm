<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseEvent;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AopCaseEventsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AopCaseEvent')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AopCaseEvent')->factory()
            ->count($count)
            ->create();
    }
}
