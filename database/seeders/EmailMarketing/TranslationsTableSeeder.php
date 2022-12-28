<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailMarketing;

use Illuminate\Database\Seeder;
use Joy\VoyagerCrm\Models\EmailMarketing;
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
        $this->emailMarketingTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function emailMarketingTranslations()
    {
        // Adding translations for 'email_marketing'
        //
        $cat = Voyager::model('EmailMarketing')->where('name', 'email_marketing-1')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['email_marketing', 'name'], $cat->id), 'email-marketing-1');
            $this->trans('pt', $this->arr(['email_marketing', 'description'], $cat->id), 'EmailMarketing 1');
        }
        $cat = Voyager::model('EmailMarketing')->where('name', 'email_marketing-2')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['email_marketing', 'name'], $cat->id), 'email-marketing-2');
            $this->trans('pt', $this->arr(['email_marketing', 'description'], $cat->id), 'EmailMarketing 2');
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
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'EmailMarketing');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = Voyager::model('DataType')->where($_fld, __('joy-voyager-crm::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'EmailMarketing');
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
        $_item = $this->findMenuItem(__('joy-voyager-crm::seeders.menu_items.email_marketing'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'EmailMarketing');
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
