<?php

namespace Joy\VoyagerCrm\Database\Seeders\Favorite;

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
        $dataType = $this->dataType('slug', 'favorites');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'favorites',
                'display_name_singular' => __('joy-voyager-crm::seeders.data_types.favorite.singular'),
                'display_name_plural'   => __('joy-voyager-crm::seeders.data_types.favorite.plural'),
                'icon'                  => 'voyager-bread voyager-crm-favorite voyager-heart',
                'model_name'            => Voyager::modelClass('Favorite'),
                // 'policy_name'           => 'Joy\\VoyagerCrm\\Policies\\FavoritePolicy',
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
