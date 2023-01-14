<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosPdfTemplatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosPdfTemplatesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosPdfTemplatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
