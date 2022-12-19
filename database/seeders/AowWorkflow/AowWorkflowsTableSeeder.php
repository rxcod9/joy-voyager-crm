<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowWorkflow;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AowWorkflowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AowWorkflow')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AowWorkflow')->factory()
            ->count($count)
            ->create();
    }
}
