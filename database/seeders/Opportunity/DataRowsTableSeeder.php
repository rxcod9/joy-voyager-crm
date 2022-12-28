<?php

namespace Joy\VoyagerCrm\Database\Seeders\Opportunity;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataRow;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = Voyager::model('DataType')->where('slug', 'opportunities')->firstOrFail();

        $dataRow = $this->dataRow($dataType, 'id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.id'),
                'required'     => 1,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 1,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'name');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.name'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 2,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'description');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text_area',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.description'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 3,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'opportunity_type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.opportunity_type'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
                'details'      => [
                    'default' => 'Type1',
                    'options' => [
                        'Type1' => 'Type1',
                        'Type2' => 'Type2',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'opportunity_belongsto_campaign_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.campaign'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => 10,
                'details'      => [
                    'model'       => Voyager::modelClass('Campaign'),
                    'table'       => 'campaigns',
                    'type'        => 'belongsTo',
                    'column'      => 'campaign_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'campaigns',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'campaign_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.campaign_id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'lead_source');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.lead_source'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'amount');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.amount'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'amount_usdollar');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.amount_usdollar'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'opportunity_belongsto_currency_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.currency'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => 10,
                'details'      => [
                    'model'       => Voyager::modelClass('Currency'),
                    'table'       => 'currencies',
                    'type'        => 'belongsTo',
                    'column'      => 'currency_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'currencies',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'currency_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.currency_id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'date_closed');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'date',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.date_closed'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'next_step');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.next_step'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'sales_stage');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.sales_stage'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
                'details'      => [
                    'default' => 'Stage1',
                    'options' => [
                        'Stage1' => 'Stage1',
                        'Stage2' => 'Stage2',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'probability');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.probability'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 10,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'opportunity_belongsto_assigned_user_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.assigned_user'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => 101,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'assigned_user_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'assigned_user_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.assigned_user_id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => 102,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'created_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.created_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 103,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 104,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'deleted_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.deleted_at'),
                'required'     => 0,
                'browse'       => 0,
                'read'         => 0,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 105,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'opportunity_belongsto_created_by_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.created_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 106,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'created_by_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'created_by_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.created_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 107,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'opportunity_belongsto_modified_by_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.modified_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 108,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'modified_by_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'modified_by_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.modified_by'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => 109,
            ])->save();
        }
    }

    /**
     * [dataRow description].
     *
     * @param [type] $type  [description]
     * @param [type] $field [description]
     *
     * @return [type] [description]
     */
    protected function dataRow($type, $field)
    {
        return Voyager::model('DataRow')->firstOrNew([
            'data_type_id' => $type->id,
            'field'        => $field,
        ]);
    }
}
