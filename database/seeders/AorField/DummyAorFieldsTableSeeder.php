<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorField;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAorFieldsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AorField')->factory()
            ->count($count)
            ->create();
    }
}
