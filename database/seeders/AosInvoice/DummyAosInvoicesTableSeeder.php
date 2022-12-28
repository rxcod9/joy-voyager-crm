<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosInvoice;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosInvoicesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosInvoice')->factory()
            ->count($count)
            ->create();
    }
}
