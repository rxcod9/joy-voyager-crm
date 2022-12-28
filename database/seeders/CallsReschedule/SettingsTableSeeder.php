<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsReschedule;

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
        $setting = $this->findSetting('calls_reschedule.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.calls_reschedule.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'CallsReschedule',
            ])->save();
        }

        $setting = $this->findSetting('calls_reschedule.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.calls_reschedule.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'CallsReschedule',
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
