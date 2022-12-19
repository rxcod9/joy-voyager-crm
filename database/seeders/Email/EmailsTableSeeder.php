<?php

namespace Joy\VoyagerCrm\Database\Seeders\Email;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Email')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Email')->factory()
            ->count($count)
            ->create();
    }
}
