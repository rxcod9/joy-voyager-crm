<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmTasktemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AmTasktemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AmTasktemplate')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AmTasktemplate')->factory()
            ->count($count)
            ->create();
    }
}
