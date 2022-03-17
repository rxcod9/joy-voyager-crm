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
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $maxOrder = MenuItem::max('order');

        $crmMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.crm'),
            'url'     => '',
        ]);
        if (!$crmMenuItem->exists) {
            $crmMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-cube',
                'color'      => null,
                'parent_id'  => null,
                'order'      => $maxOrder,
            ])->save();
        }

        $this->call([
            \Joy\VoyagerBreadAccount\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadCall\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadCampaign\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadContact\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadContract\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadDocument\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadEmail\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadEmailTemplate\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadEvent\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadGroup\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadInvoice\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadLead\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadLineItem\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadLocation\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadMeeting\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadNote\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadOpportunity\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadPdfTemplate\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadProduct\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadProductCategory\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadProject\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadProjectTask\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadQuote\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadTarget\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadTargetList\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadTask\Database\Seeders\MenuItemsTableSeeder::class,
            \Joy\VoyagerBreadTicket\Database\Seeders\MenuItemsTableSeeder::class,
        ], [$crmMenuItem->id]);
    }
}
