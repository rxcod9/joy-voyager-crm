<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class CleanJobQueue extends Command
{
    protected $name = 'joy-voyager-crm:clean_job_queue';

    protected $description = 'Joy VoyagerCrm CleanJobQueue';

    public function handle()
    {
        $this->output->title('Starting CleanJobQueue');

        // Your magic here

        $this->output->success('CleanJobQueue successful');
    }
}
