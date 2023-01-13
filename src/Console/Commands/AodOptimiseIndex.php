<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class AodOptimiseIndex extends Command
{
    protected $name = 'joy-voyager-crm:aod_optimise_index';

    protected $description = 'Joy VoyagerCrm AodOptimiseIndex';

    public function handle()
    {
        $this->output->title('Starting AodOptimiseIndex');

        // Your magic here

        $this->output->success('AodOptimiseIndex successful');
    }
}
