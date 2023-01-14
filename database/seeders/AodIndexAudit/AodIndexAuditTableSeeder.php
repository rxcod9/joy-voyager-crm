<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AodIndexAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AodIndexAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AodIndexAudit')->factory()
            ->count($count)
            ->create();
    }
}
