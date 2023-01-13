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
                'Sugar'         => 'SuiteCRM',
                'WebEx'         => 'WebEx',
                'GoToMeeting'   => 'GoToMeeting',
                'IBMSmartCloud' => 'IBM SmartCloud',
                'Google'        => 'Google',
                'Box'           => 'Box.net',
                'Facebook'      => 'Facebook',
                'Twitter'       => 'Twitter',
            ]),
            'doc_url'              => $this->faker->url(),
            'active_date'          => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'exp_date'             => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'category_id'          => $this->faker->randomKey([
                ''                => 'None',
                'Marketing'       => 'Marketing',
                'Knowledege Base' => 'Knowledge Base',
                'Sales'           => 'Sales',
            ]),
            'subcategory_id'       => $this->faker->randomKey([
                ''                     => 'None',
                'Marketing Collateral' => 'Marketing Collateral',
                'Product Brochures'    => 'Product Brochures',
                'FAQ'                  => 'FAQ',
            ]),
            'status_id'            => $this->faker->randomKey([
                'Active'       => 'Active',
                'Draft'        => 'Draft',
                'FAQ'          => 'FAQ',
                'Expired'      => 'Expired',
                'Under Review' => 'Under Review',
                'Pending'      => 'Pending',
            ]),
            'document_revision_id' => null,
            'related_doc_id'       => null,
            'related_doc_rev_id'   => null,
            'is_template'          => $this->faker->boolean(),
            'template_type'        => $this->faker->randomKey([
                ''          => 'None',
                'mailmerge' => 'Mail Merge',
                'eula'      => 'EULA',
                'nda'       => 'NDA',
                'license'   => 'License Agreement',
            ]),
            'created_at'           => $this->faker->dateTime(),
            'updated_at'           => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
