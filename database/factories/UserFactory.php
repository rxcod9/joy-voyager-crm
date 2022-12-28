<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            // 'avatar' => $this->faker->avatar(),
            // 'role_id' => $this->faker->role_id(),
            // 'settings' => $this->faker->settings(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
            'user_name' => $this->faker->unique()->name(),
            'user_hash' => Str::random(10),
            'system_generated_password' => $this->faker->boolean(),
            'pwd_last_changed' => $this->faker->dateTime(),
            // 'authenticate_id' => $this->faker->authenticate_id(),
            'sugar_login' => $this->faker->boolean(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'is_admin' => $this->faker->boolean(),
            'external_auth_only' => $this->faker->boolean(),
            'receive_notifications' => $this->faker->boolean(),
            'description' => $this->faker->text(500),
            // 'modified_by_id' => $this->faker->modified_by_id(),
            // 'created_by_id' => $this->faker->created_by_id(),
            'title' => $this->faker->title(),
            // 'photo' => $this->faker->photo(),
            'department' => $this->faker->word(),
            'phone_home' => $this->faker->phoneNumber(),
            'phone_mobile' => $this->faker->phoneNumber(),
            'phone_work' => $this->faker->phoneNumber(),
            'phone_other' => $this->faker->phoneNumber(),
            'phone_fax' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            'address_street' => $this->faker->streetName(),
            'address_city' => $this->faker->city(),
            'address_state' => $this->faker->state(),
            'address_country' => $this->faker->country(),
            'address_postalcode' => $this->faker->postcode(),
            'portal_only' => $this->faker->boolean(),
            'show_on_employees' => $this->faker->boolean(),
            'employee_status' => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            // 'messenger_id' => $this->faker->messenger_id(),
            // 'messenger_type' => $this->faker->messenger_type(),
            // 'reports_to_id' => $this->faker->reports_to_id(),
            'is_group' => $this->faker->boolean(),
            // 'factor_auth' => $this->faker->factor_auth(),
            // 'factor_auth_interface' => $this->faker->factor_auth_interface()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
