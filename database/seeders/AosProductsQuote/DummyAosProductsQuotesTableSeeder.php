<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsQuote;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosProductsQuotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosProductsQuote')->factory()
            ->count($count)
            ->create();
    }
}
