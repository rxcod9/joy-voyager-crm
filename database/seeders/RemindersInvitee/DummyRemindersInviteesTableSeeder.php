<?php

namespace Joy\VoyagerCrm\Database\Seeders\RemindersInvitee;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyRemindersInviteesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('RemindersInvitee')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'reminder_id' => optional(Voyager::model('Reminder')->inRandomOrder()->take(1)->first())->id,
                ];
            })
            ->create();
    }
}
