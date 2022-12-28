<?php

namespace Joy\VoyagerCrm\Database\Seeders\Lead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyLeadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Lead')->factory()
            ->count($count)
            ->create();
    }
}
