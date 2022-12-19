<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailTemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyEmailTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('EmailTemplate')->factory()
            ->count($count)
            ->create();
    }
}
