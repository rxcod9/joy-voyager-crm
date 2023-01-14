<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosPdfTemplatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosPdfTemplatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
