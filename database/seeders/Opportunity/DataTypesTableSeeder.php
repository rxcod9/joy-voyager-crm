<?php

namespace Joy\VoyagerCrm\Database\Seeders\Opportunity;

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
        $dataType = $this->dataType('slug', 'opportunities');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'opportunities',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.opportunity.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.opportunity.plural'),
                'icon'                  => 'fa-solid fa-arrow-right',
                'model_name'            => Voyager::modelClass('Opportunity'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\OpportunityPolicy',
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
