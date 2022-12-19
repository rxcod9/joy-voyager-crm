<?php

namespace Joy\VoyagerCrm\Database\Seeders\Folder;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class FoldersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Folder')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Folder')->factory()
            ->count($count)
            ->create();
    }
}
