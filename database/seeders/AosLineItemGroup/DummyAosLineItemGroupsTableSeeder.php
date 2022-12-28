<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosLineItemGroup;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosLineItemGroupsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosLineItemGroup')->factory()
            ->count($count)
            ->create();
    }
}
