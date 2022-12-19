<?php

namespace Joy\VoyagerCrm\Database\Seeders\Project;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Project')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Project')->factory()
            ->count($count)
            ->create();
    }
}
