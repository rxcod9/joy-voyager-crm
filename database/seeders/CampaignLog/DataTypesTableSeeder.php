<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignLog;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'campaign-logs');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'campaign_log',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.campaign_log.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.campaign_log.plural'),
                'icon'                  => 'voyager-bread voyager-crm-campaign_log voyager-logbook',
                'model_name'            => Voyager::modelClass('CampaignLog'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\CampaignLogPolicy',
                // 'controller'            => 'Joy\\VoyagerCrm\\Http\\Controllers\\VoyagerCrmController',
                'generate_permissions'  => 1,
                'description'           => '',
                'order_column'          => 'created_at',
                'order_direction'       => 'desc',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return Voyager::model('DataType')->firstOrNew([$field => $for]);
    }
}
