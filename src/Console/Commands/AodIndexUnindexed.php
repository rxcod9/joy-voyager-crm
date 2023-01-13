<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class AodIndexUnindexed extends Command
{
    protected $name = 'joy-voyager-crm:aod_index_unindexed';

    protected $description = 'Joy VoyagerCrm AodIndexUnindexed';

    public function handle()
    {
        $this->output->title('Starting AodIndexUnindexed');

        // Your magic here

        $this->output->success('AodIndexUnindexed successful');
    }
}
