<?php

namespace Joy\VoyagerCrm\Database\Seeders\ProspectListsProspect;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DataRowsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = Voyager::model('DataType')->where('slug', 'prospect-lists-prospects')->firstOrFail();
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

        $dataRow = $this->dataRow($dataType, 'prospect_lists_prospect_belongsto_prospect_list_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.prospect_list'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 0,
                'order'        => ++$order,
                'details'      => [
                    'model'       => Voyager::modelClass('ProspectList'),
                    'table'       => 'prospect_lists',
                    'type'        => 'belongsTo',
                    'column'      => 'prospect_list_id',
                    'key'         => 'id',
                    'label'       => 'name',
                    'pivot_table' => 'prospect_lists',
                    'pivot'       => 0,
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'prospect_list_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.prospect_list_id'),
                'required'     => 1,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'related_type');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'select_dropdown',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.related_type'),
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
                        Voyager::modelClass('Lead')     => 'Leads',
                        Voyager::modelClass('User')     => 'User',
                        Voyager::modelClass('Prospect') => 'Prospects',
                        Voyager::modelClass('Contact')  => 'Contacts',
                        Voyager::modelClass('Account')  => 'Accounts',
                    ],
                ],
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'related_id');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'text',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.related_id'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
            ])->save();
        }

        $dataRow = $this->dataRow($dataType, 'prospect_lists_prospect_morphto_related_relationship');
        if (!$dataRow->exists) {
            $dataRow->fill([
                'type'         => 'relationship',
                'display_name' => __('joy-voyager-crm::seeders.data_rows.related'),
                'required'     => 0,
                'browse'       => 1,
                'read'         => 1,
                'edit'         => 1,
                'add'          => 1,
                'delete'       => 1,
                'order'        => ++$order,
                'details'      => [
                    'type'        => 'morphTo',
                    'function'    => 'relatedable',
                    'type_column' => 'related_type',
                    'column'      => 'related_id',
                    'types'       => [
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.lead'),
                            'model'        => Voyager::modelClass('Lead'),
                            'key'          => 'id',
                            'label'        => 'first_name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.user'),
                            'model'        => Voyager::modelClass('User'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.prospect'),
                            'model'        => Voyager::modelClass('Prospect'),
                            'key'          => 'id',
                            'label'        => 'first_name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.contact'),
                            'model'        => Voyager::modelClass('Contact'),
                            'key'          => 'id',
                            'label'        => 'first_name',
                        ],
                        [
                            'display_name' => __('joy-voyager-crm::seeders.data_rows.account'),
                            'model'        => Voyager::modelClass('Account'),
                            'key'          => 'id',
                            'label'        => 'name',
                        ]
                    ]
                ],
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
                'browse'       => 0,
                'read'         => 0,
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
