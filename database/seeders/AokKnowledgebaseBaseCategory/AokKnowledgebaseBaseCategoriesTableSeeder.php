<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseBaseCategory;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AokKnowledgebaseBaseCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AokKnowledgebaseBaseCategory')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AokKnowledgebaseBaseCategory')->factory()
            ->count($count)
            ->create();
    }
}
