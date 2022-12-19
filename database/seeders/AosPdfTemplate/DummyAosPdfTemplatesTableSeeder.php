<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosPdfTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosPdfTemplate')->factory()
            ->count($count)
            ->create();
    }
}
