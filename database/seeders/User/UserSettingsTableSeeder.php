<?php

namespace Joy\VoyagerCrm\Database\Seeders\User;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class UserSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $setting = $this->findSettingType('preferences.check_for_new_email');
        $order   = Voyager::model('UserSettingType')->max('order') ?? 0;
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.user_settings.check_for_new_email'),
                'type'         => 'select_dropdown',
                'order'        => ++$order,
                'group'        => 'Preferences',
                'details'      => json_encode([
                    'default' => null,
                    'options' => [
                        null        => 'Select',
                        'manually'  => 'Manually',
                        'automatic' => 'Automatic',
                    ],
                ]),
            ])->save();
        }

        $setting = $this->findSettingType('preferences.character_set');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.user_settings.character_set'),
                'type'         => 'select_dropdown',
                'order'        => ++$order,
                'group'        => 'Preferences',
                'details'      => json_encode([
                    'default' => null,
                    'options' => [
                        null    => 'Select',
                        'utf-8' => 'UTF-8',
                    ],
                ]),
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
    protected function findSettingType($key)
    {
        return Voyager::model('UserSettingType')->firstOrNew(['key' => $key]);
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
        return Voyager::model('UserSetting')->firstOrNew(['key' => $key]);
    }
}
