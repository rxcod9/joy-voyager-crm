<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class ProcessAowWorkflow extends Command
{
    protected $name = 'joy-voyager-crm:process_aow_workflow';

    protected $description = 'Joy VoyagerCrm ProcessAowWorkflow';

    public function handle()
    {
        $this->output->title('Starting ProcessAowWorkflow');

        // Your magic here

        $this->output->success('ProcessAowWorkflow successful');
    }
}
