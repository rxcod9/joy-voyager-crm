<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\ImportMap;

class ImportMapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImportMap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'           => $this->faker->name(),
            // 'description' => $this->faker->text(500),
            'source'         => null,
            'enclosure'      => $this->faker->randomElement([
                ' ',
                ',',
                ';',
                // '\t',
                '|',
                // '   ',
            ]),
            'delimiter'      => $this->faker->randomElement([
                ' ',
                ',',
                ';',
                // '\t',
                '|',
                // '   ',
            ]),
            'module'         => null,
            'content'        => null,
            'default_values' => null,
            'has_header'     => $this->faker->boolean(),
            'is_published'   => $this->faker->randomElement([
                'Yes',
                'No',
            ]),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
