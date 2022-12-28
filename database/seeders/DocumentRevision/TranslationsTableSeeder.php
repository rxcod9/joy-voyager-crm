<?php

namespace Joy\VoyagerCrm\Database\Seeders\DocumentRevision;

use Illuminate\Database\Seeder;
use Joy\VoyagerCrm\Models\DocumentRevision;
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
        $this->documentRevisionsTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function documentRevisionsTranslations()
    {
        // Adding translations for 'document_revisions'
        //
        $cat = Voyager::model('DocumentRevision')->where('name', 'document_revision-1')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['document_revisions', 'name'], $cat->id), 'document-revision-1');
            $this->trans('pt', $this->arr(['document_revisions', 'description'], $cat->id), 'DocumentRevision 1');
        }
        $cat = Voyager::model('DocumentRevision')->where('name', 'document_revision-2')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['document_revisions', 'name'], $cat->id), 'document-revision-2');
            $this->trans('pt', $this->arr(['document_revisions', 'description'], $cat->id), 'DocumentRevision 2');
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
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'DocumentRevision');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = Voyager::model('DataType')->where($_fld, __('joy-voyager-crm::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'DocumentRevisions');
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
        $_item = $this->findMenuItem(__('joy-voyager-crm::seeders.menu_items.document_revisions'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'DocumentRevisions');
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
