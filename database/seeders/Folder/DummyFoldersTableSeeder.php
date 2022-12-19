<?php

namespace Joy\VoyagerCrm\Database\Seeders\Folder;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyFoldersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Folder')->factory()
            ->count($count)
            ->create();
    }
}
