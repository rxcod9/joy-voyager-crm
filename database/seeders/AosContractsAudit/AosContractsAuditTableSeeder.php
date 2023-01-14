<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContractsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosContractsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosContractsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosContractsAudit')->factory()
            ->count($count)
            ->create();
    }
}
