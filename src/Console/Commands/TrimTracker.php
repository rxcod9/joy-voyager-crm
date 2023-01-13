<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class TrimTracker extends Command
{
    protected $name = 'joy-voyager-crm:trim_tracker';

    protected $description = 'Joy VoyagerCrm TrimTracker';

    public function handle()
    {
        $this->output->title('Starting TrimTracker');

        // Your magic here

        $this->output->success('TrimTracker successful');
    }
}
