<?php

namespace Joy\VoyagerCrm\Database\Seeders\AccountsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAccountsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AccountsAudit')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'parent_id' => optional(Voyager::model('Account')->inRandomOrder()->take(1)->first())->id,
                ];
            })
            ->create();
    }
}
