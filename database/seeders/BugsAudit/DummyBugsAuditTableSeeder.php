<?php

namespace Joy\VoyagerCrm\Database\Seeders\BugsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyBugsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('BugsAudit')->factory()
            ->count($count)
            ->create();
    }
}
