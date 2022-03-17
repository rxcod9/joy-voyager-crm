<?php

namespace Joy\VoyagerCrm\Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Joy\VoyagerBreadAccount\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadCall\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadCampaign\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadContact\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadContract\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadDocument\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadEmail\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadEmailTemplate\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadEvent\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadGroup\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadInvoice\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadLead\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadLineItem\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadLocation\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadMeeting\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadNote\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadOpportunity\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadPdfTemplate\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadProduct\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadProductCategory\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadProject\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadProjectTask\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadQuote\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadTarget\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadTargetList\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadTask\Database\Seeders\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerBreadTicket\Database\Seeders\VoyagerDatabaseSeeder::class,
        ]);
    }
}
