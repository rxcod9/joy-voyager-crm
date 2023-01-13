<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class SyncGoogleCalendar extends Command
{
    protected $name = 'joy-voyager-crm:sync_google_calendar';

    protected $description = 'Joy VoyagerCrm SyncGoogleCalendar';

    public function handle()
    {
        $this->output->title('Starting SyncGoogleCalendar');

        // Your magic here

        $this->output->success('SyncGoogleCalendar successful');
    }
}
