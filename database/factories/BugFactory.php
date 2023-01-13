<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Bug;

class BugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bug::class;

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
            'bug_number'       => $this->faker->unique()->numberBetween(1, 1000),
            'type'             => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.types', [
                    'Defect'  => 'Defect',
                    'Feature' => 'Feature',
                ])
            ]),
            'status'           => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.statuses', [
                    'New'      => 'New',
                    'Assigned' => 'Assigned',
                    'Closed'   => 'Closed',
                    'Pending'  => 'Pending',
                    'Rejected' => 'Rejected',
                ]),
            ]),
            'priority'         => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.priorities', [
                    'Urgent' => 'Urgent',
                    'High'   => 'High',
                    'Medium' => 'Medium',
                    'Low'    => 'Low',
                ]),
            ]),
            'resolution'       => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.resolutions', [
                    ''            => 'None',
                    'Accepted'    => 'Accepted',
                    'Duplicate'   => 'Duplicate',
                    'Fixed'       => 'Fixed',
                    'Out of Date' => 'Out of Date',
                    'Invalid'     => 'Invalid',
                    'Later'       => 'Later',
                ]),
            ]),
            'work_log'         => $this->faker->text(100),
            // 'found_in_release' => null,
            // 'fixed_in_release' => null,
            'source'           => $this->faker->randomKey([
                ''             => 'None',
                'Internal'     => 'Internal',
                'Forum'        => 'Forum',
                'Web'          => 'Web',
                'InboundEmail' => 'Email',
            ]),
            'product_category' => $this->faker->randomKey([
                ''               => 'None',
                'Accounts'       => 'Accounts',
                'Activities'     => 'Activities',
                'Bugs'           => 'Bugs',
                'Calendar'       => 'Calendar',
                'Calls'          => 'Calls',
                'Campaigns'      => 'Campaigns',
                'Cases'          => 'Cases',
                'Contacts'       => 'Contacts',
                'Currencies'     => 'Currencies',
                'Dashboard'      => 'Dashboard',
                'Documents'      => 'Documents',
                'Emails'         => 'Emails',
                'Feeds'          => 'Feeds',
                'Forecasts'      => 'Forecasts',
                'Help'           => 'Help',
                'Home'           => 'Home',
                'Leads'          => 'Leads',
                'Meetings'       => 'Meetings',
                'Notes'          => 'Notes',
                'Opportunities'  => 'Opportunities',
                'Outlook Plugin' => 'Outlook Plugin',
                'Projects'       => 'Projects',
                'Quotes'         => 'Quotes',
                'Releases'       => 'Releases',
                'RSS'            => 'RSS',
                'Studio'         => 'Studio',
                'Upgrade'        => 'Upgrade',
                'Users'          => 'Users',
            ]),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
