<?php

namespace Joy\VoyagerCrm\Database\Seeders\Scheduler;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySchedulersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Scheduler')->factory()
            ->count($count)
            ->create();
    }
}
