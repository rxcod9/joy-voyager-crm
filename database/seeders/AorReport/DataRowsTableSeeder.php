<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorReport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = Voyager::model('DataType')->where('slug', 'aor-reports')->firstOrFail();
        $order    = Voyager::model('DataRow')->whereDataTypeId($dataType->id)->max('order') ?? 0;

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
                'order'        => ++$order,
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
                'order'        => ++$order,
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
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'report_module');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.report_module'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
                'details'      => [
                    'default' => null,
                    'options' => [
                        // @TODO All data types except AOR_ and AOW_
                        'accounts'      => 'accounts',
                        'contacts'      => 'contacts',
                        'opportunities' => 'opportunities',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'graphs_per_row');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'number',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.graphs_per_row'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'aor_report_belongsto_assigned_to_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.assigned_to'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('User'),
                    'table'       => 'users',
                    'type'        => 'belongsTo',
                    'column'      => 'assigned_to_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'users',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'assigned_to_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.assigned_to'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
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
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'updated_at');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'timestamp',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.updated_at'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 0,
                'add'          => 0,
                'delete'       => 0,
                'order'        => ++$order,
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
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'aor_report_belongsto_created_by_relationship');
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
                'order'        => ++$order,
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
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'aor_report_belongsto_modified_by_relationship');
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
                'order'        => ++$order,
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
                'order'        => ++$order,
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
