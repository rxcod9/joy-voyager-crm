<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductCategoriesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosProductCategoriesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosProductCategoriesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosProductCategoriesAudit')->factory()
            ->count($count)
            ->create();
    }
}
