<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndex;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAodIndexesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AodIndex')->factory()
            ->count($count)
            ->create();
    }
}
