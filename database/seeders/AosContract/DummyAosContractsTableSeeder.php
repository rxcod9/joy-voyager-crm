<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContract;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosContractsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosContract')->factory()
            ->count($count)
            ->create();
    }
}
