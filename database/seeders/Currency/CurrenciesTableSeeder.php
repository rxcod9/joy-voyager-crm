<?php

namespace Joy\VoyagerCrm\Database\Seeders\Currency;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use TCG\Voyager\Facades\Voyager;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Currency')->query()->count() > 0) {
            return false;
        }

        $currencies = json_decode(file_get_contents(__DIR__ . '/../../json/currencies.json'));

        foreach ($currencies as $currencyEach) {
            $currency = $this->currency($currencyEach->code);
            if (!$currency->exists) {
                $currency->name            = $currencyEach->name;
                $currency->symbol          = $currencyEach->symbol_native;
                $currency->iso4217         = $currencyEach->code;
                $currency->decimal         = $currencyEach->decimal;
                $currency->rounding        = $currencyEach->rounding;
                $currency->conversion_rate = null;
                $currency->status          = 'Active';
                $currency->created_at      = Carbon::now();
                $currency->updated_at      = Carbon::now();
                // $currency->deleted_at => Carbon::now();
                $currency->save();
            }
        }
    }

    /**
     * [currency description].
     *
     * @param [type] $iso4217 [description]
     *
     * @return [type] [description]
     */
    protected function currency($iso4217)
    {
        return Voyager::model('Currency')->firstOrNew([
            'iso4217' => $iso4217,
        ]);
    }
}
