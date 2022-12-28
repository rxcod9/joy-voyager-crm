<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContract;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosContractsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosContract')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosContract')->factory()
            ->count($count)
            ->create();
    }
}
