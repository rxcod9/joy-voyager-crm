<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class SendEmailReminders extends Command
{
    protected $name = 'joy-voyager-crm:send_email_reminders';

    protected $description = 'Joy VoyagerCrm SendEmailReminders';

    public function handle()
    {
        $this->output->title('Starting SendEmailReminders');

        // Your magic here

        $this->output->success('SendEmailReminders successful');
    }
}
