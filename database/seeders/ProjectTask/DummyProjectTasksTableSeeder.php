<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProjectTask;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyProjectTasksTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ProjectTask')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'project_id' => optional(Voyager::model('Project')->inRandomOrder()->take(1)->first())->id
                ];
            })
            ->create();
    }
}
