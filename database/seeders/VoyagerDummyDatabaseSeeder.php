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
            \Joy\VoyagerCrm\Database\Seeders\Document\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductCategory\VoyagerDummyDatabaseSeeder::class,
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
            // \Joy\VoyagerCrm\Database\Seeders\UserPreference\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UsersSignature\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Account\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowWorkflow\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Reminder\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmProjecttemplate\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmTasktemplate\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AobhBusinesshour\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AodIndex\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseBaseCategory\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebase\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorReport\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Eapm\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Alert\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Campaign\VoyagerDummyDatabaseSeeder::class,
            // \Joy\VoyagerCrm\Database\Seeders\AopCaseEvent\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorChart\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorCondition\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorField\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorScheduledReport\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsReschedule\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\DocumentRevision\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosLineItemGroup\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowAction\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowCondition\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowProcessed\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\RemindersInvitee\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsUser\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\FpEvent\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JobQueue\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\MeetingsUser\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SecuritygroupsUser\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Surveyquestion\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Contact\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Opportunity\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowProcessedAowAction\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CampaignTrkr\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailMarketing\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\LinkedDocument\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Surveyquestionoption\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CrmCase\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AopCaseUpdate\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ContactsBug\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosContract\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosInvoice\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProduct\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosQuote\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsContact\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Lead\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\MeetingsContact\VoyagerDummyDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Note\VoyagerDummyDatabaseSeeder::class,
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
