<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AosProductsQuote;
use TCG\Voyager\Facades\Voyager;

class AosProductsQuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AosProductsQuote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $parentType = $this->faker->randomKey([
            ''                                 => 'None',
            Voyager::modelClass('Account')     => 'Account',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',
            Voyager::modelClass('Contact')     => 'Contact', // cn (11/22/2005) added to support Emails

            Voyager::modelClass('Bug')         => 'Bug',
            Voyager::modelClass('Project')     => 'Project',

            Voyager::modelClass('Prospect')    => 'Target',
            Voyager::modelClass('ProjectTask') => 'Project Task',

            Voyager::modelClass('Task')        => 'Task',

            Voyager::modelClass('AosContract') => 'Contract',
            Voyager::modelClass('AosInvoice')  => 'Invoice',
            Voyager::modelClass('AosQuote')    => 'Quote',
            Voyager::modelClass('AosProduct')  => 'Product',
        ]);

        return [
            'name'                             => $this->faker->name(),
            'description'                      => $this->faker->text(500),
            'currency_id'                      => null,
            'part_number'                      => $this->faker->word(),
            'item_description'                 => $this->faker->paragraphs(10, true),
            'number'                           => $this->faker->numberBetween(1, 100),
            'product_qty'                      => $this->faker->randomFloat(2),
            'product_cost_price'               => $this->faker->randomFloat(2),
            'product_cost_price_usdollar'      => $this->faker->randomFloat(2),
            'product_list_price'               => $this->faker->randomFloat(2),
            'product_list_price_usdollar'      => $this->faker->randomFloat(2),
            'product_discount'                 => $this->faker->randomFloat(2),
            'product_discount_usdollar'        => $this->faker->randomFloat(2),
            'product_discount_amount'          => $this->faker->randomFloat(2),
            'product_discount_amount_usdollar' => $this->faker->randomFloat(2),
            'discount'                         => $this->faker->text(50),
            'product_unit_price'               => $this->faker->randomFloat(2),
            'product_unit_price_usdollar'      => $this->faker->randomFloat(2),
            'vat_amt'                          => $this->faker->randomFloat(2),
            'vat_amt_usdollar'                 => $this->faker->randomFloat(2),
            'product_total_price'              => $this->faker->randomFloat(2),
            'product_total_price_usdollar'     => $this->faker->randomFloat(2),
            'vat'                              => $this->faker->text(50),
            'parent_type'                      => $parentType,
            'parent_id'                        => optional($parentType)->factory(),
            'product_id'                       => null,
            'group_id'                         => null,
            'created_at'                       => $this->faker->dateTime(),
            'updated_at'                       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
