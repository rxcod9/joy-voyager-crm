<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductCategory;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosProductCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosProductCategory')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosProductCategory')->factory()
            ->count($count)
            ->create();
    }
}
