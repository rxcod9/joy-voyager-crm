<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosPdfTemplatesAudit;

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
        $setting = $this->findSetting('aos_pdf_templates_audit.key1');
        $order   = Voyager::model('Setting')->max('order') ?? 0;
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aos_pdf_templates_audit.key1'),
                'value'        => 'Joy Voyager',
                'details'      => '',
                'type'         => 'text',
                'order'        => ++$order,
                'group'        => 'AosPdfTemplatesAudit',
            ])->save();
        }

        $setting = $this->findSetting('aos_pdf_templates_audit.image');
        if (!$setting->exists) {
            $setting->fill([
                'display_name' => __('joy-voyager-crm::seeders.settings.aos_pdf_templates_audit.image'),
                'value'        => '',
                'details'      => '',
                'type'         => 'image',
                'order'        => ++$order,
                'group'        => 'AosPdfTemplatesAudit',
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
