<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowAction;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAowActionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AowAction')->factory()
            ->count($count)
            ->create();
    }
}
