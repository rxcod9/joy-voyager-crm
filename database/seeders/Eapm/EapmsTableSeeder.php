<?php

namespace Joy\VoyagerCrm\Database\Seeders\Eapm;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EapmsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Eapm')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Eapm')->factory()
            ->count($count)
            ->create();
    }
}
