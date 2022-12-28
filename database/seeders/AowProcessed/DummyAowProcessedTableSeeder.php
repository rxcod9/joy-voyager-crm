<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowProcessed;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAowProcessedTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AowProcessed')->factory()
            ->count($count)
            ->create();
    }
}
