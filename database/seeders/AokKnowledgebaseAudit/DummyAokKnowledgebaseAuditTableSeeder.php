<?php

namespace Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAokKnowledgebaseAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AokKnowledgebaseAudit')->factory()
            ->count($count)
            ->create();
    }
}
