<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorReport;

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
        $setting = $this->findSetting('aor_report.key1');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aor_report.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => 1,
                'group'        => 'AorReport',
            ])->save();
        }

        $setting = $this->findSetting('aor_report.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aor_report.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => 2,
                'group'        => 'AorReport',
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
