<?php

namespace Joy\VoyagerCrm\Database\Seeders\Task;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyTasksTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Task')->factory()
            ->count($count)
            ->create();
    }
}
