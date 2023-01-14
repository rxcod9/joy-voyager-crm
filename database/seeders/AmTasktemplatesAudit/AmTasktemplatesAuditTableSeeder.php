<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmTasktemplatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AmTasktemplatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AmTasktemplatesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AmTasktemplatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
