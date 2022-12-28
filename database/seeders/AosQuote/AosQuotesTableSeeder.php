<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosQuote;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosQuotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosQuote')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosQuote')->factory()
            ->count($count)
            ->create();
    }
}
