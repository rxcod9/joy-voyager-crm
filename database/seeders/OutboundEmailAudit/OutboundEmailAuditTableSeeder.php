<?php

namespace Joy\VoyagerCrm\Database\Seeders\OutboundEmailAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class OutboundEmailAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('OutboundEmailAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('OutboundEmailAudit')->factory()
            ->count($count)
            ->create();
    }
}
