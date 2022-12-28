<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\EmailCache;

class EmailCacheFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmailCache::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'description' => $this->faker->text(500),
            'mbox'       => $this->faker->text(60),
            'subject'    => $this->faker->text(60),
            'fromaddr'   => $this->faker->freeEmail(),
            'toaddr'     => $this->faker->freeEmail(),
            'senddate'   => $this->faker->dateTimeBetween('-1month', 'now'),
            'message_id' => $this->faker->text(50),
            'mailsize'   => $this->faker->randomNumber(6),
            'imap_uid'   => $this->faker->randomNumber(6),
            'msgno'      => $this->faker->randomNumber(6),
            'recent'     => $this->faker->boolean(),
            'flagged'    => $this->faker->boolean(),
            'answered'   => $this->faker->boolean(),
            'seen'       => $this->faker->boolean(),
            'draft'      => $this->faker->boolean(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
