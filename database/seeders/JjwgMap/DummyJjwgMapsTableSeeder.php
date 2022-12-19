<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMap;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyJjwgMapsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('JjwgMap')->factory()
            ->count($count)
            ->create();
    }
}
