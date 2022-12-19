<?php

declare(strict_types=1);

namespace Joy\VoyagerCrm;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Joy\VoyagerCrm\Models\Account;
use Joy\VoyagerCrm\Models\AccountsAudit;
use Joy\VoyagerCrm\Models\AccountsBug;
use Joy\VoyagerCrm\Models\AccountsCase;
use Joy\VoyagerCrm\Models\AccountsContact;
use Joy\VoyagerCrm\Models\AccountsCstm;
use Joy\VoyagerCrm\Models\AccountsOpportunity;
use Joy\VoyagerCrm\Models\AclAction;
use Joy\VoyagerCrm\Models\AclRole;
use Joy\VoyagerCrm\Models\AclRolesAction;
use Joy\VoyagerCrm\Models\AclRolesUser;
use Joy\VoyagerCrm\Models\AddressBook;
use Joy\VoyagerCrm\Models\Alert;
use Joy\VoyagerCrm\Models\AmProjecttemplate;
use Joy\VoyagerCrm\Models\AmProjecttemplatesAudit;
use Joy\VoyagerCrm\Models\AmProjecttemplatesContacts1C;
use Joy\VoyagerCrm\Models\AmProjecttemplatesProject1C;
use Joy\VoyagerCrm\Models\AmProjecttemplatesUsers1C;
use Joy\VoyagerCrm\Models\AmTasktemplate;
use Joy\VoyagerCrm\Models\AmTasktemplatesAmProjecttemplatesC;
use Joy\VoyagerCrm\Models\AmTasktemplatesAudit;
use Joy\VoyagerCrm\Models\AobhBusinesshour;
use Joy\VoyagerCrm\Models\AodIndex;
use Joy\VoyagerCrm\Models\AodIndexAudit;
use Joy\VoyagerCrm\Models\AodIndexevent;
use Joy\VoyagerCrm\Models\AodIndexeventAudit;
use Joy\VoyagerCrm\Models\AokKnowledgeBaseCategoriesAudit;
use Joy\VoyagerCrm\Models\AokKnowledgebase;
use Joy\VoyagerCrm\Models\AokKnowledgebaseAudit;
use Joy\VoyagerCrm\Models\AokKnowledgebaseBaseCategory;
use Joy\VoyagerCrm\Models\AokKnowledgebaseCategory;
use Joy\VoyagerCrm\Models\AopCaseEvent;
use Joy\VoyagerCrm\Models\AopCaseEventsAudit;
use Joy\VoyagerCrm\Models\AopCaseUpdate;
use Joy\VoyagerCrm\Models\AopCaseUpdatesAudit;
use Joy\VoyagerCrm\Models\AorChart;
use Joy\VoyagerCrm\Models\AorCondition;
use Joy\VoyagerCrm\Models\AorField;
use Joy\VoyagerCrm\Models\AorReport;
use Joy\VoyagerCrm\Models\AorReportsAudit;
use Joy\VoyagerCrm\Models\AorScheduledReport;
use Joy\VoyagerCrm\Models\AosContract;
use Joy\VoyagerCrm\Models\AosContractsAudit;
use Joy\VoyagerCrm\Models\AosContractsDocument;
use Joy\VoyagerCrm\Models\AosInvoice;
use Joy\VoyagerCrm\Models\AosInvoicesAudit;
use Joy\VoyagerCrm\Models\AosLineItemGroup;
use Joy\VoyagerCrm\Models\AosLineItemGroupsAudit;
use Joy\VoyagerCrm\Models\AosPdfTemplate;
use Joy\VoyagerCrm\Models\AosPdfTemplatesAudit;
use Joy\VoyagerCrm\Models\AosProduct;
use Joy\VoyagerCrm\Models\AosProductCategoriesAudit;
use Joy\VoyagerCrm\Models\AosProductCategory;
use Joy\VoyagerCrm\Models\AosProductsAudit;
use Joy\VoyagerCrm\Models\AosProductsQuote;
use Joy\VoyagerCrm\Models\AosProductsQuotesAudit;
use Joy\VoyagerCrm\Models\AosQuote;
use Joy\VoyagerCrm\Models\AosQuotesAosInvoicesC;
use Joy\VoyagerCrm\Models\AosQuotesAudit;
use Joy\VoyagerCrm\Models\AosQuotesOsContractsC;
use Joy\VoyagerCrm\Models\AosQuotesProjectC;
use Joy\VoyagerCrm\Models\AowAction;
use Joy\VoyagerCrm\Models\AowCondition;
use Joy\VoyagerCrm\Models\AowProcessed;
use Joy\VoyagerCrm\Models\AowProcessedAowAction;
use Joy\VoyagerCrm\Models\AowWorkflow;
use Joy\VoyagerCrm\Models\AowWorkflowAudit;
use Joy\VoyagerCrm\Models\Bug;
use Joy\VoyagerCrm\Models\BugsAudit;
use Joy\VoyagerCrm\Models\Call;
use Joy\VoyagerCrm\Models\CallsContact;
use Joy\VoyagerCrm\Models\CallsLead;
use Joy\VoyagerCrm\Models\CallsReschedule;
use Joy\VoyagerCrm\Models\CallsRescheduleAudit;
use Joy\VoyagerCrm\Models\CallsUser;
use Joy\VoyagerCrm\Models\Campaign;
use Joy\VoyagerCrm\Models\CampaignLog;
use Joy\VoyagerCrm\Models\CampaignTrkr;
use Joy\VoyagerCrm\Models\CampaignsAudit;
use Joy\VoyagerCrm\Models\CasesAudit;
use Joy\VoyagerCrm\Models\CasesBug;
use Joy\VoyagerCrm\Models\CasesCstm;
use Joy\VoyagerCrm\Models\Config;
use Joy\VoyagerCrm\Models\Contact;
use Joy\VoyagerCrm\Models\ContactsAudit;
use Joy\VoyagerCrm\Models\ContactsBug;
use Joy\VoyagerCrm\Models\ContactsCase;
use Joy\VoyagerCrm\Models\ContactsCstm;
use Joy\VoyagerCrm\Models\ContactsUser;
use Joy\VoyagerCrm\Models\CrmCase;
use Joy\VoyagerCrm\Models\CronRemoveDocument;
use Joy\VoyagerCrm\Models\Currency;
use Joy\VoyagerCrm\Models\CustomField;
use Joy\VoyagerCrm\Models\Document;
use Joy\VoyagerCrm\Models\DocumentRevision;
use Joy\VoyagerCrm\Models\DocumentsAccount;
use Joy\VoyagerCrm\Models\DocumentsBug;
use Joy\VoyagerCrm\Models\DocumentsCase;
use Joy\VoyagerCrm\Models\DocumentsContact;
use Joy\VoyagerCrm\Models\DocumentsOpportunity;
use Joy\VoyagerCrm\Models\Eapm;
use Joy\VoyagerCrm\Models\Email;
use Joy\VoyagerCrm\Models\EmailAddrBeanRel;
use Joy\VoyagerCrm\Models\EmailAddress;
use Joy\VoyagerCrm\Models\EmailAddressesAudit;
use Joy\VoyagerCrm\Models\EmailCache;
use Joy\VoyagerCrm\Models\EmailMarketing;
use Joy\VoyagerCrm\Models\EmailMarketingProspectList;
use Joy\VoyagerCrm\Models\EmailTemplate;
use Joy\VoyagerCrm\Models\Emailman;
use Joy\VoyagerCrm\Models\EmailsBean;
use Joy\VoyagerCrm\Models\EmailsEmailAddrRel;
use Joy\VoyagerCrm\Models\EmailsText;
use Joy\VoyagerCrm\Models\Favorite;
use Joy\VoyagerCrm\Models\FieldsMetaDatum;
use Joy\VoyagerCrm\Models\Folder;
use Joy\VoyagerCrm\Models\FoldersRel;
use Joy\VoyagerCrm\Models\FoldersSubscription;
use Joy\VoyagerCrm\Models\FpEvent;
use Joy\VoyagerCrm\Models\FpEventLocation;
use Joy\VoyagerCrm\Models\FpEventLocationsAudit;
use Joy\VoyagerCrm\Models\FpEventLocationsFpEvents1C;
use Joy\VoyagerCrm\Models\FpEventsAudit;
use Joy\VoyagerCrm\Models\FpEventsContactsC;
use Joy\VoyagerCrm\Models\FpEventsFpEventDelegates1C;
use Joy\VoyagerCrm\Models\FpEventsFpEventLocations1C;
use Joy\VoyagerCrm\Models\FpEventsLeads1C;
use Joy\VoyagerCrm\Models\FpEventsProspects1C;
use Joy\VoyagerCrm\Models\ImportMap;
use Joy\VoyagerCrm\Models\InboundEmail;
use Joy\VoyagerCrm\Models\InboundEmailAutoreply;
use Joy\VoyagerCrm\Models\InboundEmailCacheT;
use Joy\VoyagerCrm\Models\JjwgAddressCache;
use Joy\VoyagerCrm\Models\JjwgAddressCacheAudit;
use Joy\VoyagerCrm\Models\JjwgArea;
use Joy\VoyagerCrm\Models\JjwgAreasAudit;
use Joy\VoyagerCrm\Models\JjwgMap;
use Joy\VoyagerCrm\Models\JjwgMapsAudit;
use Joy\VoyagerCrm\Models\JjwgMapsJjwgAreasC;
use Joy\VoyagerCrm\Models\JjwgMapsJjwgMarkersC;
use Joy\VoyagerCrm\Models\JjwgMarker;
use Joy\VoyagerCrm\Models\JjwgMarkersAudit;
use Joy\VoyagerCrm\Models\JobQueue;
use Joy\VoyagerCrm\Models\Lead;
use Joy\VoyagerCrm\Models\LeadsAudit;
use Joy\VoyagerCrm\Models\LeadsCstm;
use Joy\VoyagerCrm\Models\LinkedDocument;
use Joy\VoyagerCrm\Models\Meeting;
use Joy\VoyagerCrm\Models\MeetingsContact;
use Joy\VoyagerCrm\Models\MeetingsCstm;
use Joy\VoyagerCrm\Models\MeetingsLead;
use Joy\VoyagerCrm\Models\MeetingsUser;
use Joy\VoyagerCrm\Models\Note;
use Joy\VoyagerCrm\Models\Oauth2client;
use Joy\VoyagerCrm\Models\Oauth2token;
use Joy\VoyagerCrm\Models\OauthConsumer;
use Joy\VoyagerCrm\Models\OauthNonce;
use Joy\VoyagerCrm\Models\OauthToken;
use Joy\VoyagerCrm\Models\OpportunitiesAudit;
use Joy\VoyagerCrm\Models\OpportunitiesContact;
use Joy\VoyagerCrm\Models\OpportunitiesCstm;
use Joy\VoyagerCrm\Models\Opportunity;
use Joy\VoyagerCrm\Models\OutboundEmail;
use Joy\VoyagerCrm\Models\OutboundEmailAudit;
use Joy\VoyagerCrm\Models\Project;
use Joy\VoyagerCrm\Models\ProjectContacts1C;
use Joy\VoyagerCrm\Models\ProjectCstm;
use Joy\VoyagerCrm\Models\ProjectTask;
use Joy\VoyagerCrm\Models\ProjectTaskAudit;
use Joy\VoyagerCrm\Models\ProjectUsers1C;
use Joy\VoyagerCrm\Models\ProjectsAccount;
use Joy\VoyagerCrm\Models\ProjectsBug;
use Joy\VoyagerCrm\Models\ProjectsCase;
use Joy\VoyagerCrm\Models\ProjectsContact;
use Joy\VoyagerCrm\Models\ProjectsOpportunity;
use Joy\VoyagerCrm\Models\ProjectsProduct;
use Joy\VoyagerCrm\Models\Prospect;
use Joy\VoyagerCrm\Models\ProspectList;
use Joy\VoyagerCrm\Models\ProspectListCampaign;
use Joy\VoyagerCrm\Models\ProspectListsProspect;
use Joy\VoyagerCrm\Models\ProspectsCstm;
use Joy\VoyagerCrm\Models\Relationship;
use Joy\VoyagerCrm\Models\Release;
use Joy\VoyagerCrm\Models\Reminder;
use Joy\VoyagerCrm\Models\RemindersInvitee;
use Joy\VoyagerCrm\Models\Role;
use Joy\VoyagerCrm\Models\RolesModule;
use Joy\VoyagerCrm\Models\RolesUser;
use Joy\VoyagerCrm\Models\SavedSearch;
use Joy\VoyagerCrm\Models\Scheduler;
use Joy\VoyagerCrm\Models\Securitygroup;
use Joy\VoyagerCrm\Models\SecuritygroupsAclRole;
use Joy\VoyagerCrm\Models\SecuritygroupsAudit;
use Joy\VoyagerCrm\Models\SecuritygroupsDefault;
use Joy\VoyagerCrm\Models\SecuritygroupsRecord;
use Joy\VoyagerCrm\Models\SecuritygroupsUser;
use Joy\VoyagerCrm\Models\Spot;
use Joy\VoyagerCrm\Models\Sugarfeed;
use Joy\VoyagerCrm\Models\Survey;
use Joy\VoyagerCrm\Models\Surveyquestion;
use Joy\VoyagerCrm\Models\Surveyquestionoption;
use Joy\VoyagerCrm\Models\SurveyquestionoptionsAudit;
use Joy\VoyagerCrm\Models\SurveyquestionoptionsSurveyquestionresponse;
use Joy\VoyagerCrm\Models\Surveyquestionresponse;
use Joy\VoyagerCrm\Models\SurveyquestionresponsesAudit;
use Joy\VoyagerCrm\Models\SurveyquestionsAudit;
use Joy\VoyagerCrm\Models\Surveyresponse;
use Joy\VoyagerCrm\Models\SurveyresponsesAudit;
use Joy\VoyagerCrm\Models\SurveysAudit;
use Joy\VoyagerCrm\Models\Task;
use Joy\VoyagerCrm\Models\Templatesectionline;
use Joy\VoyagerCrm\Models\Tracker;
use Joy\VoyagerCrm\Models\UpgradeHistory;
use Joy\VoyagerCrm\Models\User;
use Joy\VoyagerCrm\Models\UserPreference;
use Joy\VoyagerCrm\Models\UsersFeed;
use Joy\VoyagerCrm\Models\UsersLastImport;
use Joy\VoyagerCrm\Models\UsersPasswordLink;
use Joy\VoyagerCrm\Models\UsersSignature;
use Joy\VoyagerCrm\Models\Vcal;
use TCG\Voyager\Facades\Voyager;

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
        //
    }
}
