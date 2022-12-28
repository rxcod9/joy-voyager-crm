<?php

namespace Joy\VoyagerCrm\Database\Seeders\CrmCase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CrmCasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CrmCase')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CrmCase')->factory()
            ->count($count)
            ->create();
    }
}
