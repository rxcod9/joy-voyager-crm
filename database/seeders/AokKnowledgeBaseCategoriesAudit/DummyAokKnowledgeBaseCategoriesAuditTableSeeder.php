<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgeBaseCategoriesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAokKnowledgeBaseCategoriesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AokKnowledgeBaseCategoriesAudit')->factory()
            ->count($count)
            ->create();
    }
}
