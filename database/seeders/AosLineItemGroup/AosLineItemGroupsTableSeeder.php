<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosLineItemGroup;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosLineItemGroupsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosLineItemGroup')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosLineItemGroup')->factory()
            ->count($count)
            ->create();
    }
}
