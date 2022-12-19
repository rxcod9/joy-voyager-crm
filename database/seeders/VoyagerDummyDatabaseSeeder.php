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
            \Joy\VoyagerCrm\Database\Seeders\User\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Currency\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Survey\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Bug\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Call\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductCategory\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowWorkflow\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Email\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ProspectList\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\InboundEmail\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OutboundEmail\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailTemplate\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailCache\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Favorite\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Folder\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\FpEventLocation\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ImportMap\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgArea\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgMap\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgMarker\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Scheduler\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Meeting\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OutboundEmail\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Project\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ProjectTask\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Release\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SavedSearch\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Securitygroup\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Spot\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Templatesectionline\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UserPreference\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UsersSignature\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Account\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadActivity\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadArticle\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadArticleCategory\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadCall\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadCampaign\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadContact\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadContract\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadCurrency\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadDeal\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadDocument\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadEmail\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadEmailTemplate\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadEvent\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadGroup\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadInvoice\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadLead\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadLineItem\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadLocation\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadMeeting\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadNote\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadNotification\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadOpportunity\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadOrder\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadAosProductCategory\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadPipeline\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadPlan\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadProduct\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadProductCategory\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadProject\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadProjectTask\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadQuote\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadRelatable\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadReport\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadSubscription\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadTarget\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadTargetList\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadTask\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadTeam\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadTicket\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerBreadWatcher\Database\Seeders\VoyagerDummyDatabaseSeeder::class,
        ]);
    }
}
