<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosInvoicesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'aos-invoices-audit');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_invoices_audit',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_invoices_audit.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_invoices_audit.plural'),
                'icon'                  => 'fas fa-history',
                'model_name'            => Voyager::modelClass('AosInvoicesAudit'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosInvoicesAuditPolicy',
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
