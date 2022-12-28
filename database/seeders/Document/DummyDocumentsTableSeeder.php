<?php

namespace Joy\VoyagerCrm\Database\Seeders\Document;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyDocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Document')->factory()
            ->count($count)
            ->create();
    }
}
