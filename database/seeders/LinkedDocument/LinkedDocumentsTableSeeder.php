<?php

namespace Joy\VoyagerCrm\Database\Seeders\LinkedDocument;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class LinkedDocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('LinkedDocument')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('LinkedDocument')->factory()
            ->count($count)
            ->create();
    }
}
