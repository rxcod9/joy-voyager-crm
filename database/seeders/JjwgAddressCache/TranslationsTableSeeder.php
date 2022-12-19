<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCache;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

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
        $this->jjwgAddressCachesTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function jjwgAddressCachesTranslations()
    {
        // Adding translations for 'jjwg_address_cache'
        //
        $cat = Voyager::model('JjwgAddressCache')->where('name', 'jjwg_address_cache-1')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['jjwg_address_cache', 'name'], $cat->id), 'jjwg-address-cache-1');
            $this->trans('pt', $this->arr(['jjwg_address_cache', 'description'], $cat->id), 'JjwgAddressCache 1');
        }
        $cat = Voyager::model('JjwgAddressCache')->where('name', 'jjwg_address_cache-2')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['jjwg_address_cache', 'name'], $cat->id), 'jjwg-address-cache-2');
            $this->trans('pt', $this->arr(['jjwg_address_cache', 'description'], $cat->id), 'JjwgAddressCache 2');
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
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'JjwgAddressCache');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp  = Voyager::model('DataType')->where($_fld, __('joy-voyager-crm::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'JjwgAddressCaches');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl  = ['menu_items', 'title'];
        $_item = $this->findMenuItem(__('joy-voyager-crm::seeders.menu_items.jjwg_address_caches'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'JjwgAddressCaches');
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
