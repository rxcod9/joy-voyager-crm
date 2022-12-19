<?php

namespace Joy\VoyagerCrm\Database\Seeders\Currency;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Currency')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Currency')->factory()
            ->count($count)
            ->create();
    }
}
