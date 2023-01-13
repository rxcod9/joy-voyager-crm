<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class AorRunScheduledReports extends Command
{
    protected $name = 'joy-voyager-crm:aor_run_scheduled_reports';

    protected $description = 'Joy VoyagerCrm AorRunScheduledReports';

    public function handle()
    {
        $this->output->title('Starting AorRunScheduledReports');

        // Your magic here

        $this->output->success('AorRunScheduledReports successful');
    }
}
