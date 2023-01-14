<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosProductsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosProductsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosProductsAudit')->factory()
            ->count($count)
            ->create();
    }
}
