<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Lead;

class LeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description'                => $this->faker->text(500),
            'salutation'                 => $this->faker->title(),
            'first_name'                 => $this->faker->firstName(),
            'last_name'                  => $this->faker->lastName(),
            'title'                      => $this->faker->word(),
            'photo'                      => null,
            'department'                 => $this->faker->word(),

            'do_not_call'                => $this->faker->boolean(),

            'phone_home'                 => $this->faker->phoneNumber(),
            'phone_mobile'               => $this->faker->phoneNumber(),
            'phone_work'                 => $this->faker->phoneNumber(),
            'phone_other'                => $this->faker->phoneNumber(),
            'phone_fax'                  => $this->faker->phoneNumber(),

            'lawful_basis'               => $this->faker->paragraphs(10, true),
            'date_reviewed'              => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),

            'lawful_basis_source'        => $this->faker->text(50),
            'primary_address_street'     => $this->faker->streetName(),
            'primary_address_city'       => $this->faker->city(),
            'primary_address_state'      => $this->faker->state(),
            'primary_address_postalcode' => $this->faker->postcode(),
            'primary_address_country'    => $this->faker->country(),
            'alt_address_street'         => $this->faker->streetName(),
            'alt_address_city'           => $this->faker->city(),
            'alt_address_state'          => $this->faker->state(),
            'alt_address_postalcode'     => $this->faker->postcode(),
            'alt_address_country'        => $this->faker->country(),
            'assistant'                  => $this->faker->name(),
            'assistant_phone'            => $this->faker->phoneNumber(),

            'converted'                  => $this->faker->boolean(),
            'refered_by'                 => $this->faker->name(),

            'lead_source'                => $this->faker->word(),

            'lead_source_description'    => $this->faker->paragraphs(10, true),

            'account_name'               => $this->faker->name(),
            'account_description'        => $this->faker->paragraphs(10, true),
            'contact_id'                 => null,
            'account_id'                 => null,
            'opportunity_id'             => null,
            'campaign_id'                => null,
            'reports_to_id'              => null,
            'opportunity_name'           => $this->faker->name(),
            'opportunity_amount'         => $this->faker->text(50),
            'birthdate'                  => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'portal_name'                => $this->faker->word(),
            'portal_app'                 => $this->faker->word(),
            'website'                    => $this->faker->domainName(),
            'status'                     => $this->faker->randomKey([
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'status_description'         => $this->faker->paragraphs(10, true),

            'created_at'                 => $this->faker->dateTime(),
            'updated_at'                 => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
