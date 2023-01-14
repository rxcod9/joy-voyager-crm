<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAodIndexAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AodIndexAudit')->factory()
            ->count($count)
            ->create();
    }
}
