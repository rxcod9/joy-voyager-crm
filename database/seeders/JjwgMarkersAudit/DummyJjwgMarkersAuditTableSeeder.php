<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMarkersAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyJjwgMarkersAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('JjwgMarkersAudit')->factory()
            ->count($count)
            ->create();
    }
}
