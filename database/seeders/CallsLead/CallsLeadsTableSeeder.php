<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsLead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CallsLeadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CallsLead')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CallsLead')->factory()
            ->count($count)
            ->create();
    }
}
