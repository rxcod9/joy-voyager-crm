<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\SecuritygroupsUser;

class SecuritygroupsUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SecuritygroupsUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'securitygroup_id' => null,
            'user_id'          => null,
            'primary_group'    => $this->faker->boolean(),
            'noninheritable'   => $this->faker->boolean(),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
