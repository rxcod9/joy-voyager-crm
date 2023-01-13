<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class PruneDatabase extends Command
{
    protected $name = 'joy-voyager-crm:prune_database';

    protected $description = 'Joy VoyagerCrm PruneDatabase';

    public function handle()
    {
        $this->output->title('Starting PruneDatabase');

        // Your magic here

        $this->output->success('PruneDatabase successful');
    }
}
