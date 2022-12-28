<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorField;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AorFieldsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AorField')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AorField')->factory()
            ->count($count)
            ->create();
    }
}
