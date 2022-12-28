<?php

namespace Joy\VoyagerCrm\Database\Seeders\InboundEmail;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'inbound-emails');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'inbound_email',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.inbound_email.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.inbound_email.plural'),
                'icon'                  => 'fa fa-envelope-open-text',
                'model_name'            => Voyager::modelClass('InboundEmail'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\InboundEmailPolicy',
                // 'controller'            => 'Joy\\VoyagerCrm\\Http\\Controllers\\VoyagerCrmController',
                'generate_permissions'  => 1,
                'description'           => '',
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
