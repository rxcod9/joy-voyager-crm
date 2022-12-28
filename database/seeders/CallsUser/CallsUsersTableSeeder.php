<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsUser;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CallsUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CallsUser')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CallsUser')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'call_id' => optional(Voyager::model('Call')->inRandomOrder()->take(1)->first())->id,
                    'user_id' => optional(Voyager::model('User')->inRandomOrder()->take(1)->first())->id,
                ];
            })
            ->create();
    }
}
