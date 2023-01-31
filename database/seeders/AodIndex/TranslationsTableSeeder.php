<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndex;

use Illuminate\Database\Seeder;
use Joy\VoyagerCrm\Models\AodIndex;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->dataTypesTranslations();
        $this->aodIndexesTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function aodIndexesTranslations()
    {
        // Adding translations for 'aod_index'
        //
        $cat = Voyager::model('AodIndex')->where('name', 'aod_index-1')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['aod_index', 'name'], $cat->id), 'aod-index-1');
            $this->trans('pt', $this->arr(['aod_index', 'description'], $cat->id), 'AodIndex 1');
        }
        $cat = Voyager::model('AodIndex')->where('name', 'aod_index-2')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['aod_index', 'name'], $cat->id), 'aod-index-2');
            $this->trans('pt', $this->arr(['aod_index', 'description'], $cat->id), 'AodIndex 2');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        
        $dtp = Voyager::model('DataType')->where($_fld, __('joy-voyager-crm::seeders.data_types.category.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'AodIndex');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = Voyager::model('DataType')->where($_fld, __('joy-voyager-crm::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'AodIndexes');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem(__('joy-voyager-crm::seeders.menu_items.aod_indexes'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'AodIndexes');
        }
    }

    private function findMenuItem($title)
    {
        return Voyager::model('MenuItem')->where('title', $title)->firstOrFail();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Voyager::model('Translation')->firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }
}
