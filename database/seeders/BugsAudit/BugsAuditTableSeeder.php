<?php

namespace Joy\VoyagerCrm\Database\Seeders\BugsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class BugsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('BugsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('BugsAudit')->factory()
            ->count($count)
            ->create();
    }
}
