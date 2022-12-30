<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContractsDocument;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosContractsDocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosContractsDocument')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosContractsDocument')->factory()
            ->count($count)
            ->create();
    }
}
