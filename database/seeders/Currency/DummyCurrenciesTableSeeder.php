<?php

namespace Joy\VoyagerCrm\Database\Seeders\Currency;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCurrenciesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Currency')->factory()
            ->count($count)
            ->create();
    }
}
