<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseBaseCategory;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAokKnowledgebaseBaseCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AokKnowledgebaseBaseCategory')->factory()
            ->count($count)
            ->create();
    }
}
