<?php

namespace Joy\VoyagerCrm\Database\Seeders\DocumentRevision;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DocumentRevisionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('DocumentRevision')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('DocumentRevision')->factory()
            ->count($count)
            ->create();
    }
}
