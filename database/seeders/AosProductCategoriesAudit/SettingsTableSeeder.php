<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductCategoriesAudit;

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
        $setting = $this->findSetting('aos_product_categories_audit.key1');
        $order   = Voyager::model('Setting')->max('order') ?? 0;
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aos_product_categories_audit.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => ++$order,
                'group'        => 'AosProductCategoriesAudit',
            ])->save();
        }

        $setting = $this->findSetting('aos_product_categories_audit.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aos_product_categories_audit.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => ++$order,
                'group'        => 'AosProductCategoriesAudit',
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
