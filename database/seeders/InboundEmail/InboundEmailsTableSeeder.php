<?php

namespace Joy\VoyagerCrm\Database\Seeders\InboundEmail;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class InboundEmailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('InboundEmail')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('InboundEmail')->factory()
            ->count($count)
            ->create();
    }
}
