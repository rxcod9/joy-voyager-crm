<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCacheAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JjwgAddressCacheAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JjwgAddressCacheAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JjwgAddressCacheAudit')->factory()
            ->count($count)
            ->create();
    }
}
