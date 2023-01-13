<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm;

use Illuminate\Console\Scheduling\Schedule;
use TCG\Voyager\Facades\Voyager;

use Illuminate\Support\{
    Facades\Route,
    ServiceProvider
};
use Joy\VoyagerCrm\Console\Commands\{
    AodIndexUnindexed,
    AodOptimiseIndex,
    AorRunScheduledReports,
    CleanJobQueue,
    PerformLuceneIndexing,
    PollMonitoredInboxes,
    PollMonitoredInboxesAop,
    PollMonitoredInboxesForBouncedCampaignEmails,
    ProcessAowWorkflow,
    PruneDatabase,
    RefreshJobs,
    RemoveDocumentsFromFs,
    RunMassEmailCampaign,
    SecurityAudit,
    SendEmailReminders,
    SyncGoogleCalendar,
    TrimSugarFeeds,
    TrimTracker
};
use Joy\VoyagerCrm\Models\{
    Account,
    AccountsAudit,
    AccountsBug,
    AccountsCase,
    AccountsContact,
    AccountsCstm,
    AccountsOpportunity,
    AclAction,
    AclRole,
    AclRolesAction,
    AclRolesUser,
    AddressBook,
    Alert,
    AmProjecttemplate,
    AmProjecttemplatesAudit,
    AmProjecttemplatesContacts1C,
    AmProjecttemplatesProject1C,
    AmProjecttemplatesUsers1C,
    AmTasktemplate,
    AmTasktemplatesAmProjecttemplatesC,
    AmTasktemplatesAudit,
    AobhBusinesshour,
    AodIndex,
    AodIndexAudit,
    AodIndexevent,
    AodIndexeventAudit,
    AokKnowledgebase,
    AokKnowledgebaseAudit,
    AokKnowledgebaseBaseCategory,
    AokKnowledgeBaseCategoriesAudit,
    AokKnowledgebaseCategory,
    AopCaseEvent,
    AopCaseEventsAudit,
    AopCaseUpdate,
    AopCaseUpdatesAudit,
    AorChart,
    AorCondition,
    AorField,
    AorReport,
    AorReportsAudit,
    AorScheduledReport,
    AosContract,
    AosContractsAudit,
    AosContractsDocument,
    AosInvoice,
    AosInvoicesAudit,
    AosLineItemGroup,
    AosLineItemGroupsAudit,
    AosPdfTemplate,
    AosPdfTemplatesAudit,
    AosProduct,
    AosProductCategoriesAudit,
    AosProductCategory,
    AosProductsAudit,
    AosProductsQuote,
    AosProductsQuotesAudit,
    AosQuote,
    AosQuotesAosInvoicesC,
    AosQuotesAudit,
    AosQuotesOsContractsC,
    AosQuotesProjectC,
    AowAction,
    AowCondition,
    AowProcessed,
    AowProcessedAowAction,
    AowWorkflow,
    AowWorkflowAudit,
    Bug,
    BugsAudit,
    Call,
    CallsContact,
    CallsLead,
    CallsReschedule,
    CallsRescheduleAudit,
    CallsUser,
    Campaign,
    CampaignLog,
    CampaignsAudit,
    CampaignTrkr,
    CasesAudit,
    CasesBug,
    CasesCstm,
    Config,
    Contact,
    ContactsAudit,
    ContactsBug,
    ContactsCase,
    ContactsCstm,
    ContactsUser,
    CrmCase,
    CronRemoveDocument,
    Currency,
    CustomField,
    Document,
    DocumentRevision,
    DocumentsAccount,
    DocumentsBug,
    DocumentsCase,
    DocumentsContact,
    DocumentsOpportunity,
    Eapm,
    Email,
    EmailAddrBeanRel,
    EmailAddress,
    EmailAddressesAudit,
    EmailCache,
    Emailman,
    EmailMarketing,
    EmailMarketingProspectList,
    EmailsBean,
    EmailsEmailAddrRel,
    EmailsText,
    EmailTemplate,
    Favorite,
    FieldsMetaDatum,
    Folder,
    FoldersRel,
    FoldersSubscription,
    FpEvent,
    FpEventLocation,
    FpEventLocationsAudit,
    FpEventLocationsFpEvents1C,
    FpEventsAudit,
    FpEventsContactsC,
    FpEventsFpEventDelegates1C,
    FpEventsFpEventLocations1C,
    FpEventsLeads1C,
    FpEventsProspects1C,
    ImportMap,
    InboundEmail,
    InboundEmailAutoreply,
    InboundEmailCacheT,
    JjwgAddressCache,
    JjwgAddressCacheAudit,
    JjwgArea,
    JjwgAreasAudit,
    JjwgMap,
    JjwgMapsAudit,
    JjwgMapsJjwgAreasC,
    JjwgMapsJjwgMarkersC,
    JjwgMarker,
    JjwgMarkersAudit,
    JobQueue,
    Lead,
    LeadsAudit,
    LeadsCstm,
    LinkedDocument,
    Meeting,
    MeetingsContact,
    MeetingsCstm,
    MeetingsLead,
    MeetingsUser,
    Note,
    Oauth2client,
    Oauth2token,
    OauthConsumer,
    OauthNonce,
    OauthToken,
    OpportunitiesAudit,
    OpportunitiesContact,
    OpportunitiesCstm,
    Opportunity,
    OutboundEmail,
    OutboundEmailAudit,
    Project,
    ProjectContacts1C,
    ProjectCstm,
    ProjectsAccount,
    ProjectsBug,
    ProjectsCase,
    ProjectsContact,
    ProjectsOpportunity,
    ProjectsProduct,
    ProjectTask,
    ProjectTaskAudit,
    ProjectUsers1C,
    Prospect,
    ProspectList,
    ProspectListCampaign,
    ProspectListsProspect,
    ProspectsCstm,
    Relationship,
    Release,
    Reminder,
    RemindersInvitee,
    RolesModule,
    SavedSearch,
    Scheduler,
    Securitygroup,
    SecuritygroupsAclRole,
    SecuritygroupsAudit,
    SecuritygroupsDefault,
    SecuritygroupsRecord,
    SecuritygroupsUser,
    Spot,
    Sugarfeed,
    Survey,
    Surveyquestion,
    Surveyquestionoption,
    SurveyquestionoptionsAudit,
    SurveyquestionoptionsSurveyquestionresponse,
    Surveyquestionresponse,
    SurveyquestionresponsesAudit,
    SurveyquestionsAudit,
    Surveyresponse,
    SurveyresponsesAudit,
    SurveysAudit,
    Task,
    Templatesectionline,
    Tracker,
    UpgradeHistory,
    User,
    UserPreference,
    UsersFeed,
    UsersLastImport,
    UsersPasswordLink,
    UsersSignature,
    Vcal
};

/**
 * Class VoyagerCrmServiceProvider
 *
 * @category  Package
 * @package   JoyVoyagerCrm
 * @author    Ramakant Gangwar <gangwar.ramakant@gmail.com>
 * @copyright 2021 Copyright (c) Ramakant Gangwar (https://github.com/rxcod9)
 * @license   http://github.com/rxcod9/joy-voyager-crm/blob/main/LICENSE New BSD License
 * @link      https://github.com/rxcod9/joy-voyager-crm
 */
class VoyagerCrmServiceProvider extends ServiceProvider
{
    /**
     * Boot
     *
     * @return void
     */
    public function boot()
    {
        Voyager::useModel('User', User::class);
        Voyager::useModel('Account', Account::class);
        Voyager::useModel('AccountsAudit', AccountsAudit::class);
        Voyager::useModel('AccountsBug', AccountsBug::class);
        Voyager::useModel('AccountsCase', AccountsCase::class);
        Voyager::useModel('AccountsContact', AccountsContact::class);
        Voyager::useModel('AccountsCstm', AccountsCstm::class);
        Voyager::useModel('AccountsOpportunity', AccountsOpportunity::class);
        Voyager::useModel('AclAction', AclAction::class);
        Voyager::useModel('AclRole', AclRole::class);
        Voyager::useModel('AclRolesAction', AclRolesAction::class);
        Voyager::useModel('AclRolesUser', AclRolesUser::class);
        Voyager::useModel('AddressBook', AddressBook::class);
        Voyager::useModel('Alert', Alert::class);
        Voyager::useModel('AmProjecttemplate', AmProjecttemplate::class);
        Voyager::useModel('AmProjecttemplatesAudit', AmProjecttemplatesAudit::class);
        Voyager::useModel('AmProjecttemplatesContacts1C', AmProjecttemplatesContacts1C::class);
        Voyager::useModel('AmProjecttemplatesProject1C', AmProjecttemplatesProject1C::class);
        Voyager::useModel('AmProjecttemplatesUsers1C', AmProjecttemplatesUsers1C::class);
        Voyager::useModel('AmTasktemplate', AmTasktemplate::class);
        Voyager::useModel('AmTasktemplatesAmProjecttemplatesC', AmTasktemplatesAmProjecttemplatesC::class);
        Voyager::useModel('AmTasktemplatesAudit', AmTasktemplatesAudit::class);
        Voyager::useModel('AobhBusinesshour', AobhBusinesshour::class);
        Voyager::useModel('AodIndex', AodIndex::class);
        Voyager::useModel('AodIndexAudit', AodIndexAudit::class);
        Voyager::useModel('AodIndexevent', AodIndexevent::class);
        Voyager::useModel('AodIndexeventAudit', AodIndexeventAudit::class);
        Voyager::useModel('AokKnowledgebase', AokKnowledgebase::class);
        Voyager::useModel('AokKnowledgebaseAudit', AokKnowledgebaseAudit::class);
        Voyager::useModel('AokKnowledgeBaseCategoriesAudit', AokKnowledgeBaseCategoriesAudit::class);
        Voyager::useModel('AokKnowledgebaseBaseCategory', AokKnowledgebaseBaseCategory::class);
        Voyager::useModel('AokKnowledgebaseCategory', AokKnowledgebaseCategory::class);
        Voyager::useModel('AopCaseEvent', AopCaseEvent::class);
        Voyager::useModel('AopCaseEventsAudit', AopCaseEventsAudit::class);
        Voyager::useModel('AopCaseUpdate', AopCaseUpdate::class);
        Voyager::useModel('AopCaseUpdatesAudit', AopCaseUpdatesAudit::class);
        Voyager::useModel('AorChart', AorChart::class);
        Voyager::useModel('AorCondition', AorCondition::class);
        Voyager::useModel('AorField', AorField::class);
        Voyager::useModel('AorReport', AorReport::class);
        Voyager::useModel('AorReportsAudit', AorReportsAudit::class);
        Voyager::useModel('AorScheduledReport', AorScheduledReport::class);
        Voyager::useModel('AosContract', AosContract::class);
        Voyager::useModel('AosContractsAudit', AosContractsAudit::class);
        Voyager::useModel('AosContractsDocument', AosContractsDocument::class);
        Voyager::useModel('AosInvoice', AosInvoice::class);
        Voyager::useModel('AosInvoicesAudit', AosInvoicesAudit::class);
        Voyager::useModel('AosLineItemGroup', AosLineItemGroup::class);
        Voyager::useModel('AosLineItemGroupsAudit', AosLineItemGroupsAudit::class);
        Voyager::useModel('AosPdfTemplate', AosPdfTemplate::class);
        Voyager::useModel('AosPdfTemplatesAudit', AosPdfTemplatesAudit::class);
        Voyager::useModel('AosProduct', AosProduct::class);
        Voyager::useModel('AosProductCategoriesAudit', AosProductCategoriesAudit::class);
        Voyager::useModel('AosProductCategory', AosProductCategory::class);
        Voyager::useModel('AosProductsAudit', AosProductsAudit::class);
        Voyager::useModel('AosProductsQuote', AosProductsQuote::class);
        Voyager::useModel('AosProductsQuotesAudit', AosProductsQuotesAudit::class);
        Voyager::useModel('AosQuote', AosQuote::class);
        Voyager::useModel('AosQuotesAosInvoicesC', AosQuotesAosInvoicesC::class);
        Voyager::useModel('AosQuotesAudit', AosQuotesAudit::class);
        Voyager::useModel('AosQuotesOsContractsC', AosQuotesOsContractsC::class);
        Voyager::useModel('AosQuotesProjectC', AosQuotesProjectC::class);
        Voyager::useModel('AowAction', AowAction::class);
        Voyager::useModel('AowCondition', AowCondition::class);
        Voyager::useModel('AowProcessed', AowProcessed::class);
        Voyager::useModel('AowProcessedAowAction', AowProcessedAowAction::class);
        Voyager::useModel('AowWorkflow', AowWorkflow::class);
        Voyager::useModel('AowWorkflowAudit', AowWorkflowAudit::class);
        Voyager::useModel('Bug', Bug::class);
        Voyager::useModel('BugsAudit', BugsAudit::class);
        Voyager::useModel('Call', Call::class);
        Voyager::useModel('CallsContact', CallsContact::class);
        Voyager::useModel('CallsLead', CallsLead::class);
        Voyager::useModel('CallsReschedule', CallsReschedule::class);
        Voyager::useModel('CallsRescheduleAudit', CallsRescheduleAudit::class);
        Voyager::useModel('CallsUser', CallsUser::class);
        Voyager::useModel('Campaign', Campaign::class);
        Voyager::useModel('CampaignLog', CampaignLog::class);
        Voyager::useModel('CampaignsAudit', CampaignsAudit::class);
        Voyager::useModel('CampaignTrkr', CampaignTrkr::class);
        Voyager::useModel('CrmCase', CrmCase::class);
        Voyager::useModel('CasesAudit', CasesAudit::class);
        Voyager::useModel('CasesBug', CasesBug::class);
        Voyager::useModel('CasesCstm', CasesCstm::class);
        Voyager::useModel('Config', Config::class);
        Voyager::useModel('Contact', Contact::class);
        Voyager::useModel('ContactsAudit', ContactsAudit::class);
        Voyager::useModel('ContactsBug', ContactsBug::class);
        Voyager::useModel('ContactsCase', ContactsCase::class);
        Voyager::useModel('ContactsCstm', ContactsCstm::class);
        Voyager::useModel('ContactsUser', ContactsUser::class);
        Voyager::useModel('CronRemoveDocument', CronRemoveDocument::class);
        Voyager::useModel('Currency', Currency::class);
        Voyager::useModel('CustomField', CustomField::class);
        Voyager::useModel('Document', Document::class);
        Voyager::useModel('DocumentRevision', DocumentRevision::class);
        Voyager::useModel('DocumentsAccount', DocumentsAccount::class);
        Voyager::useModel('DocumentsBug', DocumentsBug::class);
        Voyager::useModel('DocumentsCase', DocumentsCase::class);
        Voyager::useModel('DocumentsContact', DocumentsContact::class);
        Voyager::useModel('DocumentsOpportunity', DocumentsOpportunity::class);
        Voyager::useModel('Eapm', Eapm::class);
        Voyager::useModel('Email', Email::class);
        Voyager::useModel('EmailAddrBeanRel', EmailAddrBeanRel::class);
        Voyager::useModel('EmailAddress', EmailAddress::class);
        Voyager::useModel('EmailAddressesAudit', EmailAddressesAudit::class);
        Voyager::useModel('EmailCache', EmailCache::class);
        Voyager::useModel('Emailman', Emailman::class);
        Voyager::useModel('EmailMarketing', EmailMarketing::class);
        Voyager::useModel('EmailMarketingProspectList', EmailMarketingProspectList::class);
        Voyager::useModel('EmailsBean', EmailsBean::class);
        Voyager::useModel('EmailsEmailAddrRel', EmailsEmailAddrRel::class);
        Voyager::useModel('EmailsText', EmailsText::class);
        Voyager::useModel('EmailTemplate', EmailTemplate::class);
        Voyager::useModel('Favorite', Favorite::class);
        Voyager::useModel('FieldsMetaDatum', FieldsMetaDatum::class);
        Voyager::useModel('Folder', Folder::class);
        Voyager::useModel('FoldersRel', FoldersRel::class);
        Voyager::useModel('FoldersSubscription', FoldersSubscription::class);
        Voyager::useModel('FpEvent', FpEvent::class);
        Voyager::useModel('FpEventLocation', FpEventLocation::class);
        Voyager::useModel('FpEventLocationsAudit', FpEventLocationsAudit::class);
        Voyager::useModel('FpEventLocationsFpEvents1C', FpEventLocationsFpEvents1C::class);
        Voyager::useModel('FpEventsAudit', FpEventsAudit::class);
        Voyager::useModel('FpEventsContactsC', FpEventsContactsC::class);
        Voyager::useModel('FpEventsFpEventDelegates1C', FpEventsFpEventDelegates1C::class);
        Voyager::useModel('FpEventsFpEventLocations1C', FpEventsFpEventLocations1C::class);
        Voyager::useModel('FpEventsLeads1C', FpEventsLeads1C::class);
        Voyager::useModel('FpEventsProspects1C', FpEventsProspects1C::class);
        Voyager::useModel('ImportMap', ImportMap::class);
        Voyager::useModel('InboundEmail', InboundEmail::class);
        Voyager::useModel('InboundEmailAutoreply', InboundEmailAutoreply::class);
        Voyager::useModel('InboundEmailCacheT', InboundEmailCacheT::class);
        Voyager::useModel('JjwgAddressCache', JjwgAddressCache::class);
        Voyager::useModel('JjwgAddressCacheAudit', JjwgAddressCacheAudit::class);
        Voyager::useModel('JjwgArea', JjwgArea::class);
        Voyager::useModel('JjwgAreasAudit', JjwgAreasAudit::class);
        Voyager::useModel('JjwgMap', JjwgMap::class);
        Voyager::useModel('JjwgMapsAudit', JjwgMapsAudit::class);
        Voyager::useModel('JjwgMapsJjwgAreasC', JjwgMapsJjwgAreasC::class);
        Voyager::useModel('JjwgMapsJjwgMarkersC', JjwgMapsJjwgMarkersC::class);
        Voyager::useModel('JjwgMarker', JjwgMarker::class);
        Voyager::useModel('JjwgMarkersAudit', JjwgMarkersAudit::class);
        Voyager::useModel('JobQueue', JobQueue::class);
        Voyager::useModel('Lead', Lead::class);
        Voyager::useModel('LeadsAudit', LeadsAudit::class);
        Voyager::useModel('LeadsCstm', LeadsCstm::class);
        Voyager::useModel('LinkedDocument', LinkedDocument::class);
        Voyager::useModel('Meeting', Meeting::class);
        Voyager::useModel('MeetingsContact', MeetingsContact::class);
        Voyager::useModel('MeetingsCstm', MeetingsCstm::class);
        Voyager::useModel('MeetingsLead', MeetingsLead::class);
        Voyager::useModel('MeetingsUser', MeetingsUser::class);
        Voyager::useModel('Note', Note::class);
        Voyager::useModel('Oauth2client', Oauth2client::class);
        Voyager::useModel('Oauth2token', Oauth2token::class);
        Voyager::useModel('OauthConsumer', OauthConsumer::class);
        Voyager::useModel('OauthNonce', OauthNonce::class);
        Voyager::useModel('OauthToken', OauthToken::class);
        Voyager::useModel('OpportunitiesAudit', OpportunitiesAudit::class);
        Voyager::useModel('OpportunitiesContact', OpportunitiesContact::class);
        Voyager::useModel('OpportunitiesCstm', OpportunitiesCstm::class);
        Voyager::useModel('Opportunity', Opportunity::class);
        Voyager::useModel('OutboundEmail', OutboundEmail::class);
        Voyager::useModel('OutboundEmailAudit', OutboundEmailAudit::class);
        Voyager::useModel('Project', Project::class);
        Voyager::useModel('ProjectContacts1C', ProjectContacts1C::class);
        Voyager::useModel('ProjectCstm', ProjectCstm::class);
        Voyager::useModel('ProjectsAccount', ProjectsAccount::class);
        Voyager::useModel('ProjectsBug', ProjectsBug::class);
        Voyager::useModel('ProjectsCase', ProjectsCase::class);
        Voyager::useModel('ProjectsContact', ProjectsContact::class);
        Voyager::useModel('ProjectsOpportunity', ProjectsOpportunity::class);
        Voyager::useModel('ProjectsProduct', ProjectsProduct::class);
        Voyager::useModel('ProjectTask', ProjectTask::class);
        Voyager::useModel('ProjectTaskAudit', ProjectTaskAudit::class);
        Voyager::useModel('ProjectUsers1C', ProjectUsers1C::class);
        Voyager::useModel('Prospect', Prospect::class);
        Voyager::useModel('ProspectList', ProspectList::class);
        Voyager::useModel('ProspectListCampaign', ProspectListCampaign::class);
        Voyager::useModel('ProspectListsProspect', ProspectListsProspect::class);
        Voyager::useModel('ProspectsCstm', ProspectsCstm::class);
        Voyager::useModel('Relationship', Relationship::class);
        Voyager::useModel('Release', Release::class);
        Voyager::useModel('Reminder', Reminder::class);
        Voyager::useModel('RemindersInvitee', RemindersInvitee::class);
        // Voyager::useModel('Role', Role::class);
        Voyager::useModel('RolesModule', RolesModule::class);
        // Voyager::useModel('RolesUser', RolesUser::class);
        Voyager::useModel('SavedSearch', SavedSearch::class);
        Voyager::useModel('Scheduler', Scheduler::class);
        Voyager::useModel('Securitygroup', Securitygroup::class);
        Voyager::useModel('SecuritygroupsAclRole', SecuritygroupsAclRole::class);
        Voyager::useModel('SecuritygroupsAudit', SecuritygroupsAudit::class);
        Voyager::useModel('SecuritygroupsDefault', SecuritygroupsDefault::class);
        Voyager::useModel('SecuritygroupsRecord', SecuritygroupsRecord::class);
        Voyager::useModel('SecuritygroupsUser', SecuritygroupsUser::class);
        Voyager::useModel('Spot', Spot::class);
        Voyager::useModel('Sugarfeed', Sugarfeed::class);
        Voyager::useModel('Survey', Survey::class);
        Voyager::useModel('Surveyquestion', Surveyquestion::class);
        Voyager::useModel('Surveyquestionoption', Surveyquestionoption::class);
        Voyager::useModel('SurveyquestionoptionsAudit', SurveyquestionoptionsAudit::class);
        Voyager::useModel('SurveyquestionoptionsSurveyquestionresponse', SurveyquestionoptionsSurveyquestionresponse::class);
        Voyager::useModel('Surveyquestionresponse', Surveyquestionresponse::class);
        Voyager::useModel('SurveyquestionresponsesAudit', SurveyquestionresponsesAudit::class);
        Voyager::useModel('SurveyquestionsAudit', SurveyquestionsAudit::class);
        Voyager::useModel('Surveyresponse', Surveyresponse::class);
        Voyager::useModel('SurveyresponsesAudit', SurveyresponsesAudit::class);
        Voyager::useModel('SurveysAudit', SurveysAudit::class);
        Voyager::useModel('Task', Task::class);
        Voyager::useModel('Templatesectionline', Templatesectionline::class);
        Voyager::useModel('Tracker', Tracker::class);
        Voyager::useModel('UpgradeHistory', UpgradeHistory::class);
        Voyager::useModel('UserPreference', UserPreference::class);
        Voyager::useModel('UsersFeed', UsersFeed::class);
        Voyager::useModel('UsersLastImport', UsersLastImport::class);
        Voyager::useModel('UsersPasswordLink', UsersPasswordLink::class);
        Voyager::useModel('UsersSignature', UsersSignature::class);
        Voyager::useModel('Vcal', Vcal::class);

        $this->registerPublishables();

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'joy-voyager-crm');

        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'joy-voyager-crm');

        $this->bootSchedulers();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->group(__DIR__ . '/../routes/web.php');
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix(config('joy-voyager-crm.route_prefix', 'api'))
            ->middleware('api')
            ->group(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/voyager-crm.php', 'joy-voyager-crm');

        $this->registerCommands();
    }

    /**
     * Register publishables.
     *
     * @return void
     */
    protected function registerPublishables(): void
    {
        $this->publishes([
            __DIR__ . '/../config/voyager-crm.php' => config_path('joy-voyager-crm.php'),
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/joy-voyager-crm'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/joy-voyager-crm'),
        ], 'translations');
    }

    protected function registerCommands(): void
    {
        $this->app->singleton('command.joy-voyager-crm.refresh-jobs', function () {
            return new RefreshJobs();
        });
        $this->app->singleton('command.joy-voyager-crm.poll-monitored-inboxes', function () {
            return new PollMonitoredInboxes();
        });
        $this->app->singleton('command.joy-voyager-crm.run-mass-email-campaign', function () {
            return new RunMassEmailCampaign();
        });
        $this->app->singleton('command.joy-voyager-crm.prune-database', function () {
            return new PruneDatabase();
        });
        $this->app->singleton('command.joy-voyager-crm.security-audit', function () {
            return new SecurityAudit();
        });
        $this->app->singleton('command.joy-voyager-crm.trim-tracker', function () {
            return new TrimTracker();
        });
        $this->app->singleton('command.joy-voyager-crm.poll-monitored-inboxes-for-bounced-campaign-emails', function () {
            return new PollMonitoredInboxesForBouncedCampaignEmails();
        });
        $this->app->singleton('command.joy-voyager-crm.send-email-reminders', function () {
            return new SendEmailReminders();
        });
        $this->app->singleton('command.joy-voyager-crm.remove-documents-from-fs', function () {
            return new RemoveDocumentsFromFs();
        });
        $this->app->singleton('command.joy-voyager-crm.trim-sugar-feeds', function () {
            return new TrimSugarFeeds();
        });
        $this->app->singleton('command.joy-voyager-crm.sync-google-calendar', function () {
            return new SyncGoogleCalendar();
        });
        $this->app->singleton('command.joy-voyager-crm.clean-job-queue', function () {
            return new CleanJobQueue();
        });
        $this->app->singleton('command.joy-voyager-crm.poll-monitored-inboxes-aop', function () {
            return new PollMonitoredInboxesAop();
        });
        $this->app->singleton('command.joy-voyager-crm.aod-index-unindexed', function () {
            return new AodIndexUnindexed();
        });
        $this->app->singleton('command.joy-voyager-crm.aod-optimise-index', function () {
            return new AodOptimiseIndex();
        });
        $this->app->singleton('command.joy-voyager-crm.perform-lucene-indexing', function () {
            return new PerformLuceneIndexing();
        });
        $this->app->singleton('command.joy-voyager-crm.aor-run-scheduled-reports', function () {
            return new AorRunScheduledReports();
        });
        $this->app->singleton('command.joy-voyager-crm.process-aow-workflow', function () {
            return new ProcessAowWorkflow();
        });

        $this->commands([
            'command.joy-voyager-crm.refresh-jobs',
            'command.joy-voyager-crm.poll-monitored-inboxes',
            'command.joy-voyager-crm.run-mass-email-campaign',
            'command.joy-voyager-crm.prune-database',
            'command.joy-voyager-crm.security-audit',
            'command.joy-voyager-crm.trim-tracker',
            'command.joy-voyager-crm.poll-monitored-inboxes-for-bounced-campaign-emails',
            'command.joy-voyager-crm.send-email-reminders',
            'command.joy-voyager-crm.remove-documents-from-fs',
            'command.joy-voyager-crm.trim-sugar-feeds',
            'command.joy-voyager-crm.sync-google-calendar',
            'command.joy-voyager-crm.clean-job-queue',
            'command.joy-voyager-crm.poll-monitored-inboxes-aop',
            'command.joy-voyager-crm.aod-index-unindexed',
            'command.joy-voyager-crm.aod-optimise-index',
            'command.joy-voyager-crm.perform-lucene-indexing',
            'command.joy-voyager-crm.aor-run-scheduled-reports',
            'command.joy-voyager-crm.process-aow-workflow',
        ]);
    }

    protected function bootSchedulers(): void
    {
        // Schedule the command if we are using the application via the CLI
        if ($this->app->runningInConsole()) {
            $this->app->booted(function () {
                $schedule = $this->app->make(Schedule::class);
                $schedule->command('joy-voyager-crm:process_aow_workflow')->everyMinute();
                $schedule->command('joy-voyager-crm:aor_run_scheduled_reports')->everyMinute();
                $schedule->command('joy-voyager-crm:trim_tracker')->monthlyOn(1, '2:00');
                $schedule->command('joy-voyager-crm:poll_monitored_inboxes_aop')->everyMinute();
                $schedule->command('joy-voyager-crm:poll_monitored_inboxes_for_bounced_campaign_emails')->twiceDaily(2, 6);
                $schedule->command('joy-voyager-crm:run_mass_email_campaign')->twiceDaily(2, 6);
                $schedule->command('joy-voyager-crm:prune_database')->monthlyOn(1, '4:00');
                $schedule->command('joy-voyager-crm:aod_index_unindexed')->daily();
                $schedule->command('joy-voyager-crm:aod_optimise_index')->everyThreeHours();
                $schedule->command('joy-voyager-crm:send_email_reminders')->everyMinute();
                $schedule->command('joy-voyager-crm:clean_job_queue')->dailyAt('5:00');
                $schedule->command('joy-voyager-crm:remove_documents_from_fs')->monthlyOn(1, '3:00');
                $schedule->command('joy-voyager-crm:trim_sugar_feeds')->monthlyOn(1, '2:00');
                $schedule->command('joy-voyager-crm:sync_google_calendar')->everyFifteenMinutes();
                // $schedule->command('joy-voyager-crm:refresh_jobs')->everyMinute();
                // $schedule->command('joy-voyager-crm:poll_monitored_inboxes')->everyMinute();
                // $schedule->command('joy-voyager-crm:security_audit')->everyMinute();
                // $schedule->command('joy-voyager-crm:perform_lucene_indexing')->everyMinute();
            });
        }
    }
}
