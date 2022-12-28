<?php

namespace Joy\VoyagerCrm\Database\Seeders\CrmCase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCrmCasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CrmCase')->factory()
            ->count($count)
            ->create();
    }
}
