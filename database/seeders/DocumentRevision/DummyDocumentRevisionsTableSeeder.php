<?php

namespace Joy\VoyagerCrm\Database\Seeders\DocumentRevision;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyDocumentRevisionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('DocumentRevision')->factory()
            ->count($count)
            ->create();
    }
}
