<?php

namespace Joy\VoyagerCrm\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run($parentMenuId = null)
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        // $crmMenuItem = MenuItem::firstOrNew([
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
        //         'order'      => MenuItem::max('order') + 1,
        //     ])->save();
        // }

        $salesMenuItem = MenuItem::firstOrNew([
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
                'order'      => MenuItem::max('order') + 1,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerBreadAccount\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadContact\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadLead\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadOpportunity\Database\Seeders\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $salesMenuItem->id]
        );

        $marketingMenuItem = MenuItem::firstOrNew([
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
                'order'      => MenuItem::max('order') + 1,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerBreadAccount\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadContact\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadLead\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadCampaign\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTarget\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTargetList\Database\Seeders\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $marketingMenuItem->id]
        );

        $supportMenuItem = MenuItem::firstOrNew([
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
                'order'      => MenuItem::max('order') + 1,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerBreadAccount\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadContact\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTicket\Database\Seeders\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $supportMenuItem->id]
        );

        $activitiesMenuItem = MenuItem::firstOrNew([
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
                'order'      => MenuItem::max('order') + 1,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerBreadEvent\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadCall\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadMeeting\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadEmail\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTask\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadNote\Database\Seeders\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $activitiesMenuItem->id]
        );

        $collaborationMenuItem = MenuItem::firstOrNew([
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
                'order'      => MenuItem::max('order') + 1,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerBreadEmail\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadDocument\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadProject\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadProjectTask\Database\Seeders\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $collaborationMenuItem->id]
        );

        $allMenuItem = MenuItem::firstOrNew([
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
                'order'      => MenuItem::max('order') + 1,
            ])->save();
        }

        $this->call(
            [
                \Joy\VoyagerBreadAccount\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadContact\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadOpportunity\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadLead\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadQuote\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadEvent\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadDocument\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadEmail\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadCampaign\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadCall\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadMeeting\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTask\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadNote\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadInvoice\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadContract\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTicket\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTarget\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTargetList\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadProject\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadLocation\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadProduct\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadProductCategory\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadPdfTemplate\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadReport\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadArticle\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadArticleCategory\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadEmailTemplate\Database\Seeders\MenuItemsTableSeeder::class,
                // \Joy\VoyagerBreadSurvey\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadActivity\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadCurrency\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadDeal\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadGroup\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadLineItem\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadNotification\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadOrder\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadPipeline\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadPlan\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadRelatable\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadSubscription\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadTeam\Database\Seeders\MenuItemsTableSeeder::class,
                \Joy\VoyagerBreadWatcher\Database\Seeders\MenuItemsTableSeeder::class,
            ],
            false,
            ['parentMenuId' => $allMenuItem->id]
        );

        // $this->call([
        //     \Joy\VoyagerBreadAccount\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadActivity\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadArticle\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadArticleCategory\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadCall\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadCampaign\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadContact\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadContract\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadCurrency\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadDeal\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadDocument\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadEmail\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadEmailTemplate\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadEvent\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadGroup\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadInvoice\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadLead\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadLineItem\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadLocation\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadMeeting\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadNote\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadNotification\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadOpportunity\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadOrder\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadPdfTemplate\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadPipeline\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadPlan\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadProduct\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadProductCategory\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadProject\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadProjectTask\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadQuote\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadRelatable\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadReport\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadSubscription\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadTarget\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadTargetList\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadTask\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadTeam\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadTicket\Database\Seeders\MenuItemsTableSeeder::class,
        //     \Joy\VoyagerBreadWatcher\Database\Seeders\MenuItemsTableSeeder::class,
        // ], false, ['parentMenuId' => $crmMenuItem->id]);
    }
}
