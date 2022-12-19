<?php

namespace Joy\VoyagerCrm\Database\Seeders\AowWorkflow;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAowWorkflowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AowWorkflow')->factory()
            ->count($count)
            ->create();
    }
}
