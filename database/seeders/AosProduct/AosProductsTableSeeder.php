<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProduct;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosProductsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosProduct')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosProduct')->factory()
            ->count($count)
            ->create();
    }
}
