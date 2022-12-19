<?php

namespace Joy\VoyagerCrm\Database\Seeders\Scheduler;

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
        $this->schedulersTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function schedulersTranslations()
    {
        // Adding translations for 'schedulers'
        //
        $cat = Voyager::model('Scheduler')->where('name', 'scheduler-1')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['schedulers', 'name'], $cat->id), 'scheduler-1');
            $this->trans('pt', $this->arr(['schedulers', 'description'], $cat->id), 'Scheduler 1');
        }
        $cat = Voyager::model('Scheduler')->where('name', 'scheduler-2')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['schedulers', 'name'], $cat->id), 'scheduler-2');
            $this->trans('pt', $this->arr(['schedulers', 'description'], $cat->id), 'Scheduler 2');
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
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Scheduler');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp  = Voyager::model('DataType')->where($_fld, __('joy-voyager-crm::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'Schedulers');
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
        $_item = $this->findMenuItem(__('joy-voyager-crm::seeders.menu_items.schedulers'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'Schedulers');
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
