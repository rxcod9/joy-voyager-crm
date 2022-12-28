<?php

namespace Joy\VoyagerCrm\Database\Seeders\RemindersInvitee;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class RemindersInviteesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('RemindersInvitee')->query()->count() > 0) {
            return false;
        }

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
