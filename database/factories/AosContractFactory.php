<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AosContract;

class AosContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AosContract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                          => $this->faker->name(),
            'description'                   => $this->faker->text(500),
            'currency_id'                   => null,
            'contract_account_id'           => null,
            'opportunity_id'                => null,
            'contact_id'                    => null,
            'call_id'                       => null,
            'reference_code'                => $this->faker->word(),
            'start_date'                    => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'end_date'                      => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'customer_signed_date'          => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'company_signed_date'           => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'renewal_reminder_date'         => $this->faker->dateTimeBetween('-1month', 'now'),
            'contract_type'                 => $this->faker->randomKey([
                'Type1' => 'Type1',
                'Type2' => 'Type2',
            ]),
            'total_contract_value'          => $this->faker->randomFloat(2),
            'total_contract_value_usdollar' => $this->faker->randomFloat(2),
            'total_amt'                     => $this->faker->randomFloat(2),
            'total_amt_usdollar'            => $this->faker->randomFloat(2),
            'subtotal_amount'               => $this->faker->randomFloat(2),
            'subtotal_amount_usdollar'      => $this->faker->randomFloat(2),
            'discount_amount'               => $this->faker->randomFloat(2),
            'discount_amount_usdollar'      => $this->faker->randomFloat(2),
            'tax_amount'                    => $this->faker->randomFloat(2),
            'tax_amount_usdollar'           => $this->faker->randomFloat(2),
            'shipping_tax'                  => $this->faker->text(50),
            'shipping_amount'               => $this->faker->randomFloat(2),
            'shipping_amount_usdollar'      => $this->faker->randomFloat(2),
            'shipping_tax_amt'              => $this->faker->randomFloat(2),
            'shipping_tax_amt_usdollar'     => $this->faker->randomFloat(2),
            'total_amount'                  => $this->faker->randomFloat(2),
            'total_amount_usdollar'         => $this->faker->randomFloat(2),
            'status'                        => $this->faker->randomKey([
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'created_at'                    => $this->faker->dateTime(),
            'updated_at'                    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
