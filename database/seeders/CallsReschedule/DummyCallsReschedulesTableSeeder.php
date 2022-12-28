<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsReschedule;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCallsReschedulesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CallsReschedule')->factory()
            ->count($count)
            ->create();
    }
}
