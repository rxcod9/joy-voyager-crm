<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexeventAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAodIndexeventAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AodIndexeventAudit')->factory()
            ->count($count)
            ->create();
    }
}
