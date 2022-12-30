<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsQuote;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosProductsQuotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosProductsQuote')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosProductsQuote')->factory()
            ->count($count)
            ->create();
    }
}
