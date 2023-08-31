<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Email;
use TCG\Voyager\Facades\Voyager;

class EmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Email::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $parentType = $this->faker->randomKey([
            // ''                                 => 'None',
            Voyager::modelClass('Account')     => 'Account',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',
            Voyager::modelClass('Contact')     => 'Contact', // cn (11/22/2005) added to support Emails

            Voyager::modelClass('Bug')         => 'Bug',
            Voyager::modelClass('Project')     => 'Project',

            Voyager::modelClass('Prospect')    => 'Target',
            Voyager::modelClass('ProjectTask') => 'Project Task',

            Voyager::modelClass('Task')        => 'Task',

            Voyager::modelClass('AosContract') => 'Contract',
            Voyager::modelClass('AosInvoice')  => 'Invoice',
            Voyager::modelClass('AosQuote')    => 'Quote',
            Voyager::modelClass('AosProduct')  => 'Product',
        ]);

        return [
            'name'               => $this->faker->name(),
            // 'description' => $this->faker->text(500),
            'orphaned'           => $this->faker->boolean(),
            'last_synced'        => $this->faker->dateTimeBetween('-1month', 'now'),
            'date_sent_received' => $this->faker->dateTimeBetween('-1month', 'now'),
            // 'message_id' => null,
            'type'               => $this->faker->randomKey([
                'out'      => 'Sent',
                'archived' => 'Archived',
                'draft'    => 'Draft',
                'inbound'  => 'Inbound',
                'campaign' => 'Campaign',
            ]),
            'status'             => $this->faker->randomKey([
                'archived'   => 'Archived',
                'closed'     => 'Closed',
                'draft'      => 'In Draft',
                'read'       => 'Read',
                'replied'    => 'Replied',
                'sent'       => 'Sent',
                'send_error' => 'Send Error',
                'unread'     => 'Unread',
            ]),
            'flagged'            => $this->faker->boolean(),
            'reply_to_status'    => $this->faker->boolean(),
            'intent'             => $this->faker->text('10'),
            'mailbox_id'         => null,
            'parent_type'        => $parentType,
            'parent_id'          => (new $parentType)->factory(),
            'uid'                => null,
            'category_id'        => $this->faker->randomKey([
                ''         => 'None',
                'Archived' => 'Archived',
                // TODO: add more categories here...
            ]),
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
