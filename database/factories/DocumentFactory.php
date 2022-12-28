<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Document;

class DocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Document::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'document_name'        => $this->faker->text(20),
            'description'          => $this->faker->text(500),
            'doc_id'               => $this->faker->text(50),
            'doc_type'             => $this->faker->randomKey([
                'DocType1' => 'DocType1',
                'DocType2' => 'DocType2',
            ]),
            'doc_url'              => $this->faker->url(),
            'active_date'          => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'exp_date'             => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'category_id'          => $this->faker->word(),
            'subcategory_id'       => $this->faker->word(),
            'status_id'            => $this->faker->word(),
            'document_revision_id' => null,
            'related_doc_id'       => null,
            'related_doc_rev_id'   => null,
            'is_template'          => $this->faker->boolean(),
            'template_type'        => $this->faker->randomKey([
                'TemplateType1' => 'TemplateType1',
                'TemplateType2' => 'TemplateType2',
            ]),
            'created_at'           => $this->faker->dateTime(),
            'updated_at'           => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
