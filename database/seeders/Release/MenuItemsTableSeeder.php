<?php

namespace Joy\VoyagerCrm\Database\Seeders\Release;

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
            'title'   => __('joy-voyager-crm::seeders.menu_items.releases'),
            'url'     => '',
            'route'   => 'voyager.releases.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-bread voyager-crm-release voyager-categories',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }
    }
}
