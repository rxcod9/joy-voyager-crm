<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmProjecttemplatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AmProjecttemplatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AmProjecttemplatesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AmProjecttemplatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
