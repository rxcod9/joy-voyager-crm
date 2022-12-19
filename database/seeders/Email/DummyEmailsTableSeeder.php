<?php

namespace Joy\VoyagerCrm\Database\Seeders\Email;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyEmailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Email')->factory()
            ->count($count)
            ->create();
    }
}
