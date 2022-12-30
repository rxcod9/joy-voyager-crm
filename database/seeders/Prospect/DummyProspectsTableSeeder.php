<?php

namespace Joy\VoyagerCrm\Database\Seeders\Prospect;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyProspectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Prospect')->factory()
            ->count($count)
            ->create();
    }
}
