<?php

namespace Joy\VoyagerCrm\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run($parentMenuId = null)
    {
        $menu = Voyager::model('Menu')->where('name', 'admin')->firstOrFail();

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        // $crmMenuItem = Voyager::model('MenuItem')->firstOrNew([
        //     'menu_id' => $menu->id,
        //     'title'   => __('joy-voyager-crm::seeders.menu_items.crm'),
        //     'url'     => '',
        // ]);
        // if (!$crmMenuItem->exists) {
        //     $crmMenuItem->fill([
        //         'target'     => '_self',
        //         'icon_class' => 'voyager-list',
        //         'color'      => null,
        //         'parent_id'  => $parentMenuId,
        //         'order'      => ++$maxOrder,
        //     ])->save();
        // }

        $salesMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.sales'),
            'url'     => '',
        ]);
        if (!$salesMenuItem->exists) {
            $salesMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-shop',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                // \Joy\VoyagerCrm\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Account\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Contact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Opportunity\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Lead\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $salesMenuItem->id]
        );

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        $marketingMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.marketing'),
            'url'     => '',
        ]);
        if (!$marketingMenuItem->exists) {
            $marketingMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-megaphone',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                // \Joy\VoyagerCrm\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Account\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Contact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Lead\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Campaign\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Prospect\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\ProspectList\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $marketingMenuItem->id]
        );

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        $supportMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.support'),
            'url'     => '',
        ]);
        if (!$supportMenuItem->exists) {
            $supportMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-question',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                // \Joy\VoyagerCrm\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Account\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Contact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CrmCase\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $supportMenuItem->id]
        );

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        $activitiesMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.activities'),
            'url'     => '',
        ]);
        if (!$activitiesMenuItem->exists) {
            $activitiesMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-activity',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                // \Joy\VoyagerCrm\Database\Seeders\Event\MenuItemsTableSeeder::class,
                // // @TODO big calender
                \Joy\VoyagerCrm\Database\Seeders\Call\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Meeting\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Email\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Task\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Note\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $activitiesMenuItem->id]
        );

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        $collaborationMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.collaboration'),
            'url'     => '',
        ]);
        if (!$collaborationMenuItem->exists) {
            $collaborationMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-puzzle',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerCrm\Database\Seeders\Email\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Document\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Project\MenuItemsTableSeeder::class,
                // \Joy\VoyagerCrm\Database\Seeders\ProjectTask\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $collaborationMenuItem->id]
        );

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        $allMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.all'),
            'url'     => '',
        ]);
        if (!$allMenuItem->exists) {
            $allMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-list',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                // \Joy\VoyagerCrm\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Account\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Contact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Opportunity\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Lead\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosQuote\MenuItemsTableSeeder::class,
                // @TODO big calender
                \Joy\VoyagerCrm\Database\Seeders\Document\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Email\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Spot\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Campaign\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Call\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Meeting\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Task\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Note\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosInvoice\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosContract\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CrmCase\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Prospect\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\ProspectList\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Project\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AmProjecttemplate\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\FpEvent\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\FpEventLocation\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosProduct\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosProductCategory\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosPdfTemplate\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AorReport\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebase\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AokKnowledgebaseBaseCategory\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\EmailTemplate\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Survey\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $allMenuItem->id]
        );

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 0;

        $othersMenuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.others'),
            'url'     => '',
        ]);
        if (!$othersMenuItem->exists) {
            $othersMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-ellipsis-h',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerCrm\Database\Seeders\Currency\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosLineItemGroup\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Bug\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\InboundEmail\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\OutboundEmail\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\EmailCache\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Favorite\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Folder\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\ImportMap\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\JjwgArea\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\JjwgMap\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\JjwgMarker\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Scheduler\MenuItemsTableSeeder::class,
                // \Joy\VoyagerCrm\Database\Seeders\ProjectTask\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Release\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\SavedSearch\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Securitygroup\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Templatesectionline\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\UsersSignature\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AowWorkflow\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Reminder\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AmTasktemplate\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AobhBusinesshour\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AodIndex\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Eapm\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Alert\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AorChart\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AorCondition\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AorField\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AorScheduledReport\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CallsReschedule\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\DocumentRevision\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AowAction\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AowCondition\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AowProcessed\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\RemindersInvitee\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CallsUser\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\JobQueue\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\MeetingsUser\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\SecuritygroupsUser\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Surveyquestion\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AowProcessedAowAction\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CampaignTrkr\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\EmailMarketing\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\LinkedDocument\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Surveyquestionoption\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AopCaseUpdate\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\ContactsBug\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CallsContact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\MeetingsContact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\OpportunitiesContact\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Surveyresponse\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\ContactsCase\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AopCaseEvent\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosProductsQuote\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\CallsLead\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AosContractsDocument\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\MeetingsLead\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Surveyquestionresponse\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Emailman\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\ProspectListsProspect\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\UsersLastImport\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Sugarfeed\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\AodIndexevent\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\SecuritygroupsRecord\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\EmailsBean\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\Tracker\MenuItemsTableSeeder::class,
                \Joy\VoyagerCrm\Database\Seeders\EmailAddress\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $othersMenuItem->id]
        );

        // $this->call([
        //     \Joy\VoyagerCrm\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Activity\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Article\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\ArticleCategory\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Call\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Campaign\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Contact\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Contract\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Currency\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Deal\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Document\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Email\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\EmailTemplate\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Event\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Group\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Invoice\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Lead\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\LineItem\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Location\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Meeting\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Note\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Notification\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Opportunity\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Order\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\AosProductCategory\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Pipeline\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Plan\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Product\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\ProductCategory\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Project\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\ProjectTask\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Quote\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Relatable\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Report\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Subscription\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Target\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\TargetList\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Task\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Team\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Ticket\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerCrm\Database\Seeders\Watcher\MenuItemsTableSeeder::class,
        // ], false, ['parentMenuId' => $crmMenuItem->id]);
    }
}
