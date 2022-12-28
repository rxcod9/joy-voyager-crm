<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignTrkr;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'campaign-trkrs');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'campaign_trkrs',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.campaign_trkr.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.campaign_trkr.plural'),
                'icon'                  => 'fa-solid fa-key',
                'model_name'            => Voyager::modelClass('CampaignTrkr'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\CampaignTrkrPolicy',
                // 'controller'            => 'Joy\\VoyagerCrm\\Http\\Controllers\\VoyagerCrmController',
                'generate_permissions' => 1,
                'description'          => '',
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
