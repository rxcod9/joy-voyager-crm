<?php

namespace Joy\VoyagerCrm\Database\Seeders\Note;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class NotesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Note')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Note')->factory()
            ->count($count)
            ->create();
    }
}
