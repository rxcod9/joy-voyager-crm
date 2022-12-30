<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsLead;

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

        $menuItem = Voyager::model('MenuItem')->firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('joy-voyager-crm::seeders.menu_items.meetings_leads'),
            'url'     => '',
            'parent_id'  => $parentMenuId,
            'route'   => 'voyager.meetings-leads.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa fa-bullhorn',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }
    }
}
