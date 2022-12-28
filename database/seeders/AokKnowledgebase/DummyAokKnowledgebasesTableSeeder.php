<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAokKnowledgebasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AokKnowledgebase')->factory()
            ->count($count)
            ->create();
    }
}
