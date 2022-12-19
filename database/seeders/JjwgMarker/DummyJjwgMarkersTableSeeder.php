<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMarker;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyJjwgMarkersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('JjwgMarker')->factory()
            ->count($count)
            ->create();
    }
}
