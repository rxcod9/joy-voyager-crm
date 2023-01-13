<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class PollMonitoredInboxesForBouncedCampaignEmails extends Command
{
    protected $name = 'joy-voyager-crm:poll_monitored_inboxes_for_bounced_campaign_emails';

    protected $description = 'Joy VoyagerCrm PollMonitoredInboxesForBouncedCampaignEmails';

    public function handle()
    {
        $this->output->title('Starting PollMonitoredInboxesForBouncedCampaignEmails');

        // Your magic here

        $this->output->success('PollMonitoredInboxesForBouncedCampaignEmails successful');
    }
}
