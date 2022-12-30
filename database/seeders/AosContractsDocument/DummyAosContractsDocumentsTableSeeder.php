<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContractsDocument;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosContractsDocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosContractsDocument')->factory()
            ->count($count)
            ->create();
    }
}
