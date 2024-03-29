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
            \Joy\VoyagerCrm\Database\Seeders\Document\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductCategory\VoyagerDatabaseSeeder::class,
            // \Joy\VoyagerCrm\Database\Seeders\AowWorkflow\VoyagerDatabaseSeeder::class,
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
            // \Joy\VoyagerCrm\Database\Seeders\UserPreference\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UsersSignature\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Account\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowWorkflow\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Reminder\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmProjecttemplate\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmTasktemplate\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AobhBusinesshour\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AodIndex\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseBaseCategory\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebase\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorReport\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Eapm\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Alert\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Campaign\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorChart\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorCondition\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorField\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorScheduledReport\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsReschedule\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\DocumentRevision\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosLineItemGroup\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowAction\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowCondition\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowProcessed\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\RemindersInvitee\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsUser\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\FpEvent\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JobQueue\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\MeetingsUser\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SecuritygroupsUser\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Surveyquestion\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Contact\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Opportunity\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowProcessedAowAction\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CampaignTrkr\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailMarketing\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\LinkedDocument\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Surveyquestionoption\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CrmCase\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AopCaseUpdate\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ContactsBug\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosContract\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosInvoice\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProduct\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosQuote\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsContact\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Lead\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\MeetingsContact\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Note\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OpportunitiesContact\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Surveyresponse\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Task\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ContactsCase\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AopCaseEvent\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductsQuote\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsLead\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosContractsDocument\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Prospect\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\MeetingsLead\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Surveyquestionresponse\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CampaignLog\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Emailman\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ProspectListsProspect\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\UsersLastImport\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Sugarfeed\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AodIndexevent\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SecuritygroupsRecord\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailsBean\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\Tracker\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailAddress\VoyagerDatabaseSeeder::class,

            \Joy\VoyagerCrm\Database\Seeders\AccountsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmProjecttemplatesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SurveysAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SurveyresponsesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SurveyquestionsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SurveyquestionresponsesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SurveyquestionoptionsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\SecuritygroupsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ProjectTaskAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OutboundEmailAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\OpportunitiesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\LeadsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgMarkersAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgAreasAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\JjwgAddressCacheAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\FpEventsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\FpEventLocationsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\EmailAddressesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\ContactsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CasesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CampaignsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\CallsRescheduleAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\BugsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AowWorkflowAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosQuotesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductsQuotesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosProductCategoriesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosPdfTemplatesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosLineItemGroupsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosInvoicesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AopCaseUpdatesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AosContractsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AorReportsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AopCaseEventsAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AokKnowledgeBaseCategoriesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AodIndexeventAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AodIndexAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmTasktemplatesAudit\VoyagerDatabaseSeeder::class,
            \Joy\VoyagerCrm\Database\Seeders\AmProjecttemplatesAudit\VoyagerDatabaseSeeder::class,
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
            \Joy\VoyagerCrm\Database\Seeders\MenuItemsTableSeeder::class,
        ]);
    }
}
