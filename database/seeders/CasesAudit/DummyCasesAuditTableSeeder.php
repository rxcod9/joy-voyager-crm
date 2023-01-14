<?php

namespace Joy\VoyagerCrm\Database\Seeders\CasesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCasesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CasesAudit')->factory()
            ->count($count)
            ->create();
    }
}
