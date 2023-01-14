<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAreasAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgAreasAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgAreasAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgAreasAudit')->factory()
            ->count($count)
            ->create();
    }
}
