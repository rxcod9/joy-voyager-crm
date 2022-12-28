<?php

namespace Joy\VoyagerCrm\Database\Seeders\Document;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Document')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Document')->factory()
            ->count($count)
            ->create();
    }
}
