<?php

namespace Joy\VoyagerCrm\Database\Seeders\Reminder;

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
        $setting = $this->findSetting('reminder.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.reminder.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'Reminder',
            ])->save();
        }

        $setting = $this->findSetting('reminder.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.reminder.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'Reminder',
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
