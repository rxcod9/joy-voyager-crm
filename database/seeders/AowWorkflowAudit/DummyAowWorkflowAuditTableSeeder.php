<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowWorkflowAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAowWorkflowAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AowWorkflowAudit')->factory()
            ->count($count)
            ->create();
    }
}
