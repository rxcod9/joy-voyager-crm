<?php

namespace Joy\VoyagerCrm\Database\Seeders\Templatesectionline;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class TemplatesectionlinesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Templatesectionline')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Templatesectionline')->factory()
            ->count($count)
            ->create();
    }
}
