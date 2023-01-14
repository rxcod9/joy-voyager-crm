<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowWorkflowAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AowWorkflowAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AowWorkflowAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AowWorkflowAudit')->factory()
            ->count($count)
            ->create();
    }
}
