<?php

namespace Joy\VoyagerCrm\Database\Seeders\CasesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CasesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CasesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CasesAudit')->factory()
            ->count($count)
            ->create();
    }
}
