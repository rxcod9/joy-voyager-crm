<?php

namespace Joy\VoyagerCrm\Database\Seeders\ImportMap;

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
        $setting = $this->findSetting('import_map.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.import_map.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'ImportMap',
            ])->save();
        }

        $setting = $this->findSetting('import_map.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.import_map.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'ImportMap',
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
