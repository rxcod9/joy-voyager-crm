<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseUpdate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAopCaseUpdatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AopCaseUpdate')->factory()
            ->count($count)
            ->create();
    }
}
