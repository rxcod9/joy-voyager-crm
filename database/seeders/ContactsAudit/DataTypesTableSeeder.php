<?php

namespace Joy\VoyagerCrm\Database\Seeders\ContactsAudit;

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
        $dataType = $this->dataType('slug', 'contacts-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'contacts_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.contacts_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.contacts_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('ContactsAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\ContactsAuditPolicy',
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
