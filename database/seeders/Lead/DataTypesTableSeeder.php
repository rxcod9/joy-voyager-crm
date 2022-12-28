<?php

namespace Joy\VoyagerCrm\Database\Seeders\Lead;

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
        $dataType = $this->dataType('slug', 'leads');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'leads',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.lead.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.lead.plural'),
                'icon'                  => 'fa fa-bullhorn',
                'model_name'            => Voyager::modelClass('Lead'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\LeadPolicy',
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
