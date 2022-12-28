<?php

namespace Joy\VoyagerCrm\Database\Seeders\JobQueue;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class JobQueuesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('JobQueue')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('JobQueue')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'scheduler_id' => optional(Voyager::model('Scheduler')->inRandomOrder()->take(1)->first())->id,
                ];
            })
            ->create();
    }
}
