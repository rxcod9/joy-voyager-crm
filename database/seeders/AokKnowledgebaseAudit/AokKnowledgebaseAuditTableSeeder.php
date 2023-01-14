<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AokKnowledgebaseAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AokKnowledgebaseAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AokKnowledgebaseAudit')->factory()
            ->count($count)
            ->create();
    }
}
