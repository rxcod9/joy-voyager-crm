<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Note;
use TCG\Voyager\Facades\Voyager;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $parentType = $this->faker->randomKey([
            ''                                 => 'None',
            Voyager::modelClass('Account')     => 'Account',
            Voyager::modelClass('Contact')     => 'Contact',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('Campaign')    => 'Campaign',
            Voyager::modelClass('Task')        => 'Task',
            Voyager::modelClass('Email')       => 'Email',

            Voyager::modelClass('Bug')         => 'Bug',
            Voyager::modelClass('Project')     => 'Project',
            Voyager::modelClass('ProjectTask') => 'Project Task',
            Voyager::modelClass('Prospect')    => 'Target',
            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',

            Voyager::modelClass('Meeting')     => 'Meeting',
            Voyager::modelClass('Call')        => 'Call',

            Voyager::modelClass('AosContract') => 'Contract',
            Voyager::modelClass('AosInvoice')  => 'Invoice',
            Voyager::modelClass('AosQuote')    => 'Quote',
            Voyager::modelClass('AosProduct')  => 'Product',
        ]);

        return [
            'name'           => $this->faker->name(),
            'description'    => $this->faker->text(500),
            'name'           => $this->faker->text(50),
            'file_mime_type' => $this->faker->text(50),
            'filename'       => $this->faker->text(50),
            'parent_type'    => $parentType,
            'parent_id'      => optional($parentType)->factory(),
            'contact_id'     => null,
            'portal_flag'    => $this->faker->boolean(),
            'embed_flag'     => $this->faker->boolean(),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
