<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosQuote;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosQuotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosQuote')->factory()
            ->count($count)
            ->create();
    }
}
