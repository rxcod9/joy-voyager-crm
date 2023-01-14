<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgMarkersAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgMarkersAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgMarkersAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgMarkersAudit')->factory()
            ->count($count)
            ->create();
    }
}
