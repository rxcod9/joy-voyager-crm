<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexevent;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSetting('aod_indexevent.key1');
        $order   = Voyager::model('Setting')->max('order') ?? 0;
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aod_indexevent.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => ++$order,
                'group'        => 'AodIndexevent',
            ])->save();
        }

        $setting = $this->findSetting('aod_indexevent.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aod_indexevent.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => ++$order,
                'group'        => 'AodIndexevent',
            ])->save();
        }
    }

    /**
     * [setting description].
     *
     * @param [type] $key [description]
     *
     * @return [type] [description]
     */
    protected function findSetting($key)
    {
        return Voyager::model('Setting')->firstOrNew(['key' => $key]);
    }
}
