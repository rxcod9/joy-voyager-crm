<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\UsersSignature;

class UsersSignatureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersSignature::class;

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
            'signature'      => $this->faker->paragraphs(10, true),
            // 'signature_html' => $this->faker->randomHtml(),
            'signature_html' => '<p>' .
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
                '</p>',
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
