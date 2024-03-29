<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AosProduct;

class AosProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AosProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                    => $this->faker->name(),
            'description'             => $this->faker->text(500),
            'currency_id'             => null,
            'contact_id'              => null,
            'aos_product_category_id' => null,
            'maincode'                => $this->faker->text(20),
            'part_number'             => $this->faker->text(20),
            'category'                => $this->faker->randomElement([
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
            'type'                    => $this->faker->text(20),
            'url'                     => $this->faker->text(20),
            'product_image'           => null,
            'cost'                    => $this->faker->randomFloat(2),
            'cost_usdollar'           => $this->faker->randomFloat(2),
            'price'                   => $this->faker->randomFloat(2),
            'price_usdollar'          => $this->faker->randomFloat(2),
            'created_at'              => $this->faker->dateTime(),
            'updated_at'              => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
