<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProduct;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosProductsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosProduct')->factory()
            ->count($count)
            ->create();
    }
}
