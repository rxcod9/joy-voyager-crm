<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\EmailTemplate;

class EmailTemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmailTemplate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $html = $this->faker->randomHtml();
        $html = '<p>' .
            'Facilisis elementum platea ante vulputate placerat nulla scelerisque rhoncus faucibus.' .
            '</p>' .
            '<p>' .
            'Volutpat montes auctor mauris ad proin consectetur integer diam himenaeos.' .
            '</p>' .
            '<p>' .
            'Condimentum non ligula blandit vulputate pulvinar rhoncus elementum himenaeos laoreet!' .
            '</p>' .
            '<p>' .
            'Lacus tincidunt dapibus faucibus, vestibulum class conubia turpis urna semper.' .
            '</p>' .
            '<p>' .
            'Viverra tincidunt faucibus nascetur natoque tortor volutpat tincidunt laoreet curabitur.' .
            '</p>';
        return [
            'published'   => $this->faker->randomElement([
                'Yes',
                'No',
            ]),
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'subject'     => $this->faker->text(20),
            'body'        => strip_tags($html),
            'body_html'   => $html,
            'text_only'   => $this->faker->boolean(),
            'type'        => $this->faker->randomElement([
                'Type1',
                'Type2',
            ]),
            'published'   => $this->faker->randomElement([
                'Yes',
                'No',
            ]),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
