<?php

namespace Joy\VoyagerCrm\Database\Seeders\InboundEmail;

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

        $maxOrder = Voyager::model('MenuItem')->max('order') ?? 1;

        $menuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.inbound_emails'),
            'url'     => '',
            'route'   => 'voyager.inbound-emails.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-envelope-open-text',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }
    }
}
