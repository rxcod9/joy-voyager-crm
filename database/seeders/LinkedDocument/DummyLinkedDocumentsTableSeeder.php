<?php

namespace Joy\VoyagerCrm\Database\Seeders\LinkedDocument;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyLinkedDocumentsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('LinkedDocument')->factory()
            ->count($count)
            ->create();
    }
}
