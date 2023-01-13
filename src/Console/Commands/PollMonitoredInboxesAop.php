<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class PollMonitoredInboxesAop extends Command
{
    protected $name = 'joy-voyager-crm:poll_monitored_inboxes_aop';

    protected $description = 'Joy VoyagerCrm PollMonitoredInboxesAop';

    public function handle()
    {
        $this->output->title('Starting PollMonitoredInboxesAop');

        // Your magic here

        $this->output->success('PollMonitoredInboxesAop successful');
    }
}
