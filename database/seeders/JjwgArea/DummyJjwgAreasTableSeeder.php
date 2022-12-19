<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgArea;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyJjwgAreasTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('JjwgArea')->factory()
            ->count($count)
            ->create();
    }
}
