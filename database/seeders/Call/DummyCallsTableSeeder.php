<?php

namespace Joy\VoyagerCrm\Database\Seeders\Call;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCallsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Call')->factory()
            ->count($count)
            ->create();
    }
}
