<?php

namespace Joy\VoyagerCrm\Database\Seeders\LeadsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class LeadsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('LeadsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('LeadsAudit')->factory()
            ->count($count)
            ->create();
    }
}
