<?php

namespace Joy\VoyagerCrm\Database\Seeders\JobQueue;

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
            'title'   => __('joy-voyager-crm::seeders.menu_items.job_queues'),
            'url'     => '',
            'route'   => 'voyager.job-queues.index',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'fa-solid fa-list-check',
                'color'      => null,
                'parent_id'  => $parentMenuId,
                'order'      => ++$maxOrder,
            ])->save();
        }
    }
}
