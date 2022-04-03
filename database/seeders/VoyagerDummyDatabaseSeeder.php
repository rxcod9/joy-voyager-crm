<?php

namespace Joy\VoyagerCrm\Database\Seeders;

use Illuminate\Database\Seeder;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Joy\VoyagerBreadAccount\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadActivity\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadArticle\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadArticleCategory\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadCall\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadCampaign\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadContact\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadContract\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadCurrency\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadDeal\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadDocument\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadEmail\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadEmailTemplate\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadEvent\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadGroup\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadInvoice\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadLead\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadLineItem\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadLocation\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadMeeting\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadNote\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadNotification\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadOpportunity\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadOrder\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadPdfTemplate\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadPipeline\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadPlan\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadProduct\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadProductCategory\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadProject\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadProjectTask\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadQuote\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadRelatable\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadReport\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadSample\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadSubscription\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadTarget\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadTargetList\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadTask\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadTeam\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadTicket\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerBreadWatcher\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
        ]);
    }
}
