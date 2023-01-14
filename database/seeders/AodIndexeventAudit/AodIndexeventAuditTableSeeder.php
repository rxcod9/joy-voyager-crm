<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexeventAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AodIndexeventAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AodIndexeventAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AodIndexeventAudit')->factory()
            ->count($count)
            ->create();
    }
}
