<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class TrimSugarFeeds extends Command
{
    protected $name = 'joy-voyager-crm:trim_sugar_feeds';

    protected $description = 'Joy VoyagerCrm TrimSugarFeeds';

    public function handle()
    {
        $this->output->title('Starting TrimSugarFeeds');

        // Your magic here

        $this->output->success('TrimSugarFeeds successful');
    }
}
