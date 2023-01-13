<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

/**
 * @DEPRECATED
 */
class RefreshJobs extends Command
{
    protected $name = 'joy-voyager-crm:refresh_jobs';

    protected $description = 'Joy VoyagerCrm Refresh Jobs';

    public function handle()
    {
        $this->output->title('Starting RefreshJobs');

        // return true;

        $this->output->success('RefreshJobs successful');
    }
}
