<?php

namespace Joy\VoyagerCrm\Database\Seeders\Prospect;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ProspectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Prospect')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Prospect')->factory()
            ->count($count)
            ->create();
    }
}
