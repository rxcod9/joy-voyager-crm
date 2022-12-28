<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEvent;

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
        $setting = $this->findSetting('fp_event.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.fp_event.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'FpEvent',
            ])->save();
        }

        $setting = $this->findSetting('fp_event.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.fp_event.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'FpEvent',
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
