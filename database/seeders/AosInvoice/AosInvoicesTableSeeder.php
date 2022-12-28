<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosInvoice;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosInvoicesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosInvoice')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosInvoice')->factory()
            ->count($count)
            ->create();
    }
}
