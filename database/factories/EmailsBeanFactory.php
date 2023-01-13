<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\EmailsBean;
use TCG\Voyager\Facades\Voyager;

class EmailsBeanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmailsBean::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $beanType = $this->faker->randomKey([
            ''                                 => 'None',
            Voyager::modelClass('Account')     => 'Account',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',
            Voyager::modelClass('Contact')     => 'Contact', // cn (11/22/2005) added to support Emails
        ]);

        return [
            'email_id'      => null,
            'bean_module'   => $beanType,
            'bean_id'       => optional($beanType)->factory(),
            'campaign_data' => $this->faker->paragraphs(10, true),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
