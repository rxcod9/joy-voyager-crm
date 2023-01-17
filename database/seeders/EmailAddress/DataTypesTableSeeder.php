<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailAddress;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'email-addresses');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'email_addresses',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.email_address.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.email_address.plural'),
                'icon'                  => 'fa-solid fa-envelope',
                'model_name'            => Voyager::modelClass('EmailAddress'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\EmailAddressPolicy',
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
