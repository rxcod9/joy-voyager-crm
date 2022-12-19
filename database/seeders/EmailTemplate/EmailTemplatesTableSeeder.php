<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailTemplate;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class EmailTemplatesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('EmailTemplate')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('EmailTemplate')->factory()
            ->count($count)
            ->create();
    }
}
