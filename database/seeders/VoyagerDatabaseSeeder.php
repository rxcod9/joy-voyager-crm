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
            \Joy\VoyagerCrm\Database\Seeders\User\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Currency\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Survey\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Bug\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Call\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductCategory\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowWorkflow\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Email\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ProspectList\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\InboundEmail\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OutboundEmail\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailTemplate\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailCache\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Favorite\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Folder\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\FpEventLocation\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ImportMap\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgArea\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgMap\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgMarker\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Scheduler\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Meeting\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OutboundEmail\VoyagerDatabaseSeeder::class, // For user
            \Joy\VoyagerCrm\Database\Seeders\Project\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ProjectTask\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Release\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SavedSearch\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Securitygroup\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Spot\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Templatesectionline\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UserPreference\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UsersSignature\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Account\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadActivity\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadArticle\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadArticleCategory\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadCall\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadCampaign\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadContact\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadContract\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadCurrency\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadDeal\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadDocument\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadEmail\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadEmailTemplate\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadEvent\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadGroup\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadInvoice\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadLead\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadLineItem\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadLocation\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadMeeting\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadNote\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadNotification\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadOpportunity\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadOrder\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadAosProductCategory\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadPipeline\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadPlan\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadProduct\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadProductCategory\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadProject\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadProjectTask\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadQuote\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadRelatable\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadReport\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadSubscription\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadTarget\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadTargetList\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadTask\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadTeam\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadTicket\Database\Seeders\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerBreadWatcher\Database\Seeders\VoyagerDatabaseSeeder::class,
        ]);
    }
}
