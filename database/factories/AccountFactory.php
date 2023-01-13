<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Account;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                        => $this->faker->name(),
            'description'                 => $this->faker->text(500),
            'account_type'                => $this->faker->randomKey([
                ''           => 'None',
                'Analyst'    => 'Analyst',
                'Competitor' => 'Competitor',
                'Customer'   => 'Customer',
                'Integrator' => 'Integrator',
                'Investor'   => 'Investor',
                'Partner'    => 'Partner',
                'Press'      => 'Press',
                'Prospect'   => 'Prospect',
                'Reseller'   => 'Reseller',
                'Other'      => 'Other',
            ]),
            'industry'                    => $this->faker->randomKey([
                ''                   => 'None',
                'Apparel'            => 'Apparel',
                'Banking'            => 'Banking',
                'Biotechnology'      => 'Biotechnology',
                'Chemicals'          => 'Chemicals',
                'Communications'     => 'Communications',
                'Construction'       => 'Construction',
                'Consulting'         => 'Consulting',
                'Education'          => 'Education',
                'Electronics'        => 'Electronics',
                'Energy'             => 'Energy',
                'Engineering'        => 'Engineering',
                'Entertainment'      => 'Entertainment',
                'Environmental'      => 'Environmental',
                'Finance'            => 'Finance',
                'Government'         => 'Government',
                'Healthcare'         => 'Healthcare',
                'Hospitality'        => 'Hospitality',
                'Insurance'          => 'Insurance',
                'Machinery'          => 'Machinery',
                'Manufacturing'      => 'Manufacturing',
                'Media'              => 'Media',
                'Not For Profit'     => 'Not For Profit',
                'Recreation'         => 'Recreation',
                'Retail'             => 'Retail',
                'Shipping'           => 'Shipping',
                'Technology'         => 'Technology',
                'Telecommunications' => 'Telecommunications',
                'Transportation'     => 'Transportation',
                'Utilities'          => 'Utilities',
                'Other'              => 'Other',
            ]),
            'annual_revenue'              => $this->faker->word(10),
            'phone_fax'                   => $this->faker->phoneNumber(),
            'billing_address_street'      => $this->faker->streetName(),
            'billing_address_city'        => $this->faker->city(),
            'billing_address_state'       => $this->faker->state(),
            'billing_address_country'     => $this->faker->country(),
            'billing_address_postalcode'  => $this->faker->postcode(),
            'rating'                      => $this->faker->text(50),
            'phone_office'                => $this->faker->phoneNumber(),
            'phone_alternate'             => $this->faker->phoneNumber(),
            'website'                     => $this->faker->url(),
            'ownership'                   => $this->faker->text(50),
            'employees'                   => $this->faker->text(10),
            'ticker_symbol'               => $this->faker->text(10),
            'shipping_address_street'     => $this->faker->streetName(),
            'shipping_address_city'       => $this->faker->city(),
            'shipping_address_state'      => $this->faker->state(),
            'shipping_address_country'    => $this->faker->country(),
            'shipping_address_postalcode' => $this->faker->postcode(),
            'sic_code'                    => $this->faker->text(10),
            'created_at'                  => $this->faker->dateTime(),
            'updated_at'                  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
