<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Currency;

class CurrencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Currency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $currencyCode = $this->faker->unique()->currencyCode();

        $currencies     = json_decode(file_get_contents(__DIR__ . '/json/currencies.json'));
        $randomCurrency = $this->faker->unique()->randomElement($currencies);

        return [
            'name'            => optional($randomCurrency)->name ?? $this->faker->name(),
            'symbol'          => optional($randomCurrency)->symbol_native ?? $currencyCode,
            'iso4217'         => optional($randomCurrency)->code ?? $currencyCode,
            'decimal'         => optional($randomCurrency)->decimal ?? 2,
            'rounding'        => optional($randomCurrency)->rounding ?? 0,
            'conversion_rate' => $this->faker->randomFloat(4, 20, 200),
            'status'          => $this->faker->randomKey(
                config('joy-voyager-crm.currencies.statuses', [
                    'Active'   => 'Active',
                    'Inactive' => 'Inactive',
                ])
            ),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
