<?php

namespace Joy\VoyagerCrm\Database\Seeders\OutboundEmail;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyOutboundEmailsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('OutboundEmail')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'user_id' => optional(Voyager::model('User')->inRandomOrder()->take(1)->first())->id
                ];
            })
            ->create();
    }
}
