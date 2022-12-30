<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailsBean;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailsBeansTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('EmailsBean')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('EmailsBean')->factory()
            ->count($count)
            ->create();
    }
}
