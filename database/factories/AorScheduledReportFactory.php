<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AorScheduledReport;

class AorScheduledReportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AorScheduledReport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => $this->faker->name(),
            'description'      => $this->faker->text(500),
            'schedule'         => $this->faker->text(50),
            'last_run'         => $this->faker->dateTimeBetween('-1month', 'now'),
            'email_recipients' => $this->faker->paragraphs(10, true),
            // 'aor_report_id'    => null,
            'status'           => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
