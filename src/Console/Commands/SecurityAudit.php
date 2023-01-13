<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class SecurityAudit extends Command
{
    protected $name = 'joy-voyager-crm:security_audit';

    protected $description = 'Joy VoyagerCrm SecurityAudit';

    public function handle()
    {
        $this->output->title('Starting SecurityAudit');

        // Your magic here

        $this->output->success('SecurityAudit successful');
    }
}
