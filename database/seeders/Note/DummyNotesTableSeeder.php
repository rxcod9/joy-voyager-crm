<?php

namespace Joy\VoyagerCrm\Database\Seeders\Note;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyNotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Note')->factory()
            ->count($count)
            ->create();
    }
}
