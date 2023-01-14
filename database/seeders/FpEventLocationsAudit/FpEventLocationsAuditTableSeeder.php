<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventLocationsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class FpEventLocationsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('FpEventLocationsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('FpEventLocationsAudit')->factory()
            ->count($count)
            ->create();
    }
}
