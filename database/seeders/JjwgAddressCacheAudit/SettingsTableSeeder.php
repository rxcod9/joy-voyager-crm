<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCacheAudit;

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
        $setting = $this->findSetting('jjwg_address_cache_audit.key1');
        $order   = Voyager::model('Setting')->max('order') ?? 0;
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.jjwg_address_cache_audit.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => ++$order,
                'group'        => 'JjwgAddressCacheAudit',
            ])->save();
        }

        $setting = $this->findSetting('jjwg_address_cache_audit.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.jjwg_address_cache_audit.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => ++$order,
                'group'        => 'JjwgAddressCacheAudit',
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
