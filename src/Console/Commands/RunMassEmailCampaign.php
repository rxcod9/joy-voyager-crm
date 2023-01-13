<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class RunMassEmailCampaign extends Command
{
    protected $name = 'joy-voyager-crm:run_mass_email_campaign';

    protected $description = 'Joy VoyagerCrm RunMassEmailCampaign';

    public function handle()
    {
        $this->output->title('Starting RunMassEmailCampaign');

        // Your magic here

        $this->output->success('RunMassEmailCampaign successful');
    }
}
