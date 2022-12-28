<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

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
            'phone_home'                 => $this->faker->phoneNumber(),
            'phone_mobile'               => $this->faker->phoneNumber(),
            'phone_work'                 => $this->faker->phoneNumber(),
            'phone_other'                => $this->faker->phoneNumber(),
            'phone_fax'                  => $this->faker->phoneNumber(),
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
            'lead_source'                => $this->faker->word(),
            'joomla_account_id'          => $this->faker->word(),
            'portal_user_type'           => $this->faker->randomKey([
                'Type1' => 'Type1',
                'Type2' => 'Type2',
            ]),
            'created_at'                 => $this->faker->dateTime(),
            'updated_at'                 => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
