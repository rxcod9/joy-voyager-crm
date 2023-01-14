<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgeBaseCategoriesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AokKnowledgeBaseCategoriesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AokKnowledgeBaseCategoriesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AokKnowledgeBaseCategoriesAudit')->factory()
            ->count($count)
            ->create();
    }
}
