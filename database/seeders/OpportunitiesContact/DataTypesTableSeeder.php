<?php

namespace Joy\VoyagerCrm\Database\Seeders\OpportunitiesContact;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'opportunities-contacts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'opportunities_contacts',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.opportunities_contact.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.opportunities_contact.plural'),
                'icon'                  => 'fa fa-address-book',
                'model_name'            => Voyager::modelClass('OpportunitiesContact'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\OpportunitiesContactPolicy',
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
