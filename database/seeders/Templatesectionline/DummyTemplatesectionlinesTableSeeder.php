<?php

namespace Joy\VoyagerCrm\Database\Seeders\Templatesectionline;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyTemplatesectionlinesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Templatesectionline')->factory()
            ->count($count)
            ->create();
    }
}
