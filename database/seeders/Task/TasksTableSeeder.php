<?php

namespace Joy\VoyagerCrm\Database\Seeders\Task;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class TasksTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Task')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Task')->factory()
            ->count($count)
            ->create();
    }
}
