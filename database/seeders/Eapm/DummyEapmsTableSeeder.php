<?php

namespace Joy\VoyagerCrm\Database\Seeders\Eapm;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyEapmsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Eapm')->factory()
            ->count($count)
            ->create();
    }
}
