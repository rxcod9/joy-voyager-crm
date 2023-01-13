<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class PollMonitoredInboxes extends Command
{
    protected $name = 'joy-voyager-crm:poll_monitored_inboxes';

    protected $description = 'Joy VoyagerCrm PollMonitoredInboxes';

    public function handle()
    {
        $this->output->title('Starting PollMonitoredInboxes');

        // Your magic here

        $this->output->success('PollMonitoredInboxes successful');
    }
}
