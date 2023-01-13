<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AosQuote;

class AosQuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AosQuote::class;

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
            'billing_account_id'           => null,
            'billing_contact_id'           => null,
            'opportunity_id'               => null,
            'currency_id'                  => null,
            'billing_address_street'       => $this->faker->streetName(),
            'billing_address_city'         => $this->faker->city(),
            'billing_address_state'        => $this->faker->state(),
            'billing_address_postalcode'   => $this->faker->postcode(),
            'billing_address_country'      => $this->faker->country(),
            'shipping_address_street'      => $this->faker->streetName(),
            'shipping_address_city'        => $this->faker->city(),
            'shipping_address_state'       => $this->faker->state(),
            'shipping_address_postalcode'  => $this->faker->postcode(),
            'shipping_address_country'     => $this->faker->country(),
            'shipping_tax'                 => $this->faker->text(50),
            'term'                         => $this->faker->randomKey([
                ''       => 'None',
                'Net 15' => 'Nett 15',
                'Net 30' => 'Nett 30',
            ]),
            'stage'                        => $this->faker->randomKey([
                'Draft'           => 'Draft',
                'Negotiation'     => 'Negotiation',
                'Delivered'       => 'Delivered',
                'On Hold'         => 'On Hold',
                'Confirmed'       => 'Confirmed',
                'Closed Accepted' => 'Closed Accepted',
                'Closed Lost'     => 'Closed Lost',
                'Closed Dead'     => 'Closed Dead',
            ]),
            'approval_status'              => $this->faker->randomKey([
                ''             => 'None',
                'Approved'     => 'Approved',
                'Not Approved' => 'Not Approved',
            ]),
            'invoice_status'               => $this->faker->randomKey([
                'Not Invoiced' => 'Not Invoiced',
                'Invoiced'     => 'Invoiced',
            ]),

            'expiration'                   => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'number'                       => $this->faker->numberBetween(1, 100),
            'total_amt'                    => $this->faker->randomFloat(2),
            'total_amt_usdollar'           => $this->faker->randomFloat(2),
            'subtotal_amount'              => $this->faker->randomFloat(2),
            'subtotal_amount_usdollar'     => $this->faker->randomFloat(2),
            'discount_amount'              => $this->faker->randomFloat(2),
            'discount_amount_usdollar'     => $this->faker->randomFloat(2),
            'tax_amount'                   => $this->faker->randomFloat(2),
            'tax_amount_usdollar'          => $this->faker->randomFloat(2),
            'shipping_amount'              => $this->faker->randomFloat(2),
            'shipping_amount_usdollar'     => $this->faker->randomFloat(2),
            'shipping_tax_amt'             => $this->faker->randomFloat(2),
            'shipping_tax_amt_usdollar'    => $this->faker->randomFloat(2),
            'total_amount'                 => $this->faker->randomFloat(2),
            'total_amount_usdollar'        => $this->faker->randomFloat(2),
            'subtotal_tax_amount'          => $this->faker->randomFloat(2),
            'subtotal_tax_amount_usdollar' => $this->faker->randomFloat(2),
            'approval_issue'               => $this->faker->paragraphs(10, true),
            'template_ddown_c'             => $this->faker->paragraphs(10, true),
            'terms_c'                      => $this->faker->paragraphs(10, true),
            'created_at'                   => $this->faker->dateTime(),
            'updated_at'                   => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
