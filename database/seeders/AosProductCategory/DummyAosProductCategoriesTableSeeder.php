<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductCategory;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosProductCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosProductCategory')->factory()
            ->count($count)
            ->create();
    }
}
