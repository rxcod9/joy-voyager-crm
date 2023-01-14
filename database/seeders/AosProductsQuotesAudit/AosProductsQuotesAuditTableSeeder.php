<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsQuotesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosProductsQuotesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosProductsQuotesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosProductsQuotesAudit')->factory()
            ->count($count)
            ->create();
    }
}
