<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebase;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AokKnowledgebasesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AokKnowledgebase')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AokKnowledgebase')->factory()
            ->count($count)
            ->create();
    }
}
