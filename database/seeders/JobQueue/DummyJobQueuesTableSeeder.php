<?php

namespace Joy\VoyagerCrm\Database\Seeders\JobQueue;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyJobQueuesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('JobQueue')->factory()
            ->count($count)
            ->create();
    }
}
