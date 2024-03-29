<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Meeting;
use TCG\Voyager\Facades\Voyager;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

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
            Voyager::modelClass('Contact')     => 'Contact',
            Voyager::modelClass('Task')        => 'Task',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('Bug')         => 'Bug', // cn (11/22/2005) added to support Emails

            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',

            Voyager::modelClass('Project')     => 'Project',
            Voyager::modelClass('ProjectTask') => 'Task Task',

            Voyager::modelClass('Prospect')    => 'Target',

            Voyager::modelClass('AosContract') => 'Contract',
            Voyager::modelClass('AosInvoice')  => 'Invoice',
            Voyager::modelClass('AosQuote')    => 'Quote',
            Voyager::modelClass('AosProduct')  => 'Product',
        ]);

        return [
            'name'                => $this->faker->name(),
            'description'         => $this->faker->text(500),
            'location'            => $this->faker->streetName(),
            'password'            => $this->faker->password(),
            'join_url'            => $this->faker->text(50),
            'host_url'            => $this->faker->text(50),
            'displayed_url'       => $this->faker->text(50),
            'creator'             => $this->faker->text(50),
            'external_id'         => $this->faker->text(50),
            'duration_hours'      => $this->faker->numberBetween(0, 24),
            'duration_minutes'    => $this->faker->numberBetween(0, 60),
            'date_start'          => $this->faker->dateTimeBetween('-1month', 'now'),
            'date_end'            => $this->faker->dateTimeBetween('-1month', '+1month'),
            'parent_type'         => $parentType,
            'parent_id'           => (new $parentType)->factory(),
            'status'              => $this->faker->randomKey(
                config('joy-voyager-crm.meetings.statuses', [
                    'Planned'  => 'Planned',
                    'Held'     => 'Held',
                    'Not Held' => 'Not Held',
                ])
            ),
            'type'                => $this->faker->randomKey(
                config('joy-voyager-crm.meetings.types', [
                    'Other' => 'Other',
                    'Sugar' => 'SuiteCRM',
                ])
            ),
            'reminder_time'       => $this->faker->randomKey([
                60    => '1 minute prior',
                300   => '5 minutes prior',
                600   => '10 minutes prior',
                900   => '15 minutes prior',
                1800  => '30 minutes prior',
                3600  => '1 hour prior',
                7200  => '2 hours prior',
                10800 => '3 hours prior',
                18000 => '5 hours prior',
                86400 => '1 day prior',
            ]),
            'email_reminder_time' => $this->faker->randomKey([
                60    => '1 minute prior',
                300   => '5 minutes prior',
                600   => '10 minutes prior',
                900   => '15 minutes prior',
                1800  => '30 minutes prior',
                3600  => '1 hour prior',
                7200  => '2 hours prior',
                10800 => '3 hours prior',
                18000 => '5 hours prior',
                86400 => '1 day prior',
            ]),
            'email_reminder_sent' => $this->faker->boolean(),
            'outlook_id'          => $this->faker->text(50),
            'sequence'            => $this->faker->numberBetween(0, 100),
            'repeat_type'         => $this->faker->randomKey([
                ''        => 'None',
                'Daily'   => 'Daily',
                'Weekly'  => 'Weekly',
                'Monthly' => 'Monthly',
                'Yearly'  => 'Yearly',
            ]),
            'repeat_interval'     => $this->faker->numberBetween(1, 10),
            'repeat_dow'          => $this->faker->randomKey([
                '0' => '',
                '1' => 'Sunday',
                '2' => 'Monday',
                '3' => 'Tuesday',
                '4' => 'Wednesday',
                '5' => 'Thursday',
                '6' => 'Friday',
                '7' => 'Saturday',
            ]),
            'repeat_until'        => $this->faker->date('Y-m-d', '+1month'),
            'repeat_count'        => $this->faker->numberBetween(0, 100),
            'repeat_parent_id'    => null,
            'recurring_source'    => null,
            'gsync_id'            => $this->faker->text(50),
            'gsync_lastsync'      => $this->faker->dateTime()->getTimestamp(),
            'created_at'          => $this->faker->dateTime(),
            'updated_at'          => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
