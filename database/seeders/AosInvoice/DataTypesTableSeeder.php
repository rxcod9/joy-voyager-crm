<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosInvoice;

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
        $dataType = $this->dataType('slug', 'aos-invoices');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'aos_invoices',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.aos_invoice.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.aos_invoice.plural'),
                'icon'                  => 'voyager-bread voyager-crm-aos_invoice voyager-receipt',
                'model_name'            => Voyager::modelClass('AosInvoice'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\AosInvoicePolicy',
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
