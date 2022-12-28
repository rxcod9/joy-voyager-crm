<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AosLineItemGroup;

class AosLineItemGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AosLineItemGroup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                         => $this->faker->name(),
            'description'                  => $this->faker->text(500),
            'total_amt'                    => $this->faker->randomFloat(6),
            'total_amt_usdollar'           => $this->faker->randomFloat(6),
            'discount_amount'              => $this->faker->randomFloat(6),
            'discount_amount_usdollar'     => $this->faker->randomFloat(6),
            'subtotal_amount'              => $this->faker->randomFloat(6),
            'subtotal_amount_usdollar'     => $this->faker->randomFloat(6),
            'tax_amount'                   => $this->faker->randomFloat(6),
            'tax_amount_usdollar'          => $this->faker->randomFloat(6),
            'subtotal_tax_amount'          => $this->faker->randomFloat(6),
            'subtotal_tax_amount_usdollar' => $this->faker->randomFloat(6),
            'total_amount'                 => $this->faker->randomFloat(6),
            'total_amount_usdollar'        => $this->faker->randomFloat(6),
            'parent_type'                  => null,
            'parent_id'                    => null,
            'number'                       => $this->faker->numberBetween(1, 100),
            'currency_id'                  => null,
            'created_at'                   => $this->faker->dateTime(),
            'updated_at'                   => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
