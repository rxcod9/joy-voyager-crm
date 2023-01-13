<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectListsProspect;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyProspectListsProspectsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('ProspectListsProspect')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'prospect_list_id' => optional(Voyager::model('ProspectList')->inRandomOrder()->take(1)->first())->id,
                ];
            })
            ->create();
    }
}
