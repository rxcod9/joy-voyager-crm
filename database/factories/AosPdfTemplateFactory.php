<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AosPdfTemplate;

class AosPdfTemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AosPdfTemplate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'active'      => $this->faker->boolean(),
            'type'        => $this->faker->randomElement([
                'Type1',
                'Type2',
            ]),
            'pdfheader'     => $this->faker->paragraphs(10, true),
            'pdffooter'     => $this->faker->paragraphs(10, true),
            'margin_left'   => $this->faker->numberBetween(10, 20),
            'margin_right'  => $this->faker->numberBetween(10, 20),
            'margin_top'    => $this->faker->numberBetween(10, 20),
            'margin_bottom' => $this->faker->numberBetween(10, 20),
            'margin_header' => $this->faker->numberBetween(10, 20),
            'margin_footer' => $this->faker->numberBetween(10, 20),
            'page_size'     => $this->faker->numberBetween(100, 200) . ' KB',
            'orientation'   => $this->faker->randomElement([
                'LANDSCAPE',
                'PORTRAIT',
            ]),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
