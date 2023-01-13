<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class RemoveDocumentsFromFs extends Command
{
    protected $name = 'joy-voyager-crm:remove_documents_from_fs';

    protected $description = 'Joy VoyagerCrm RemoveDocumentsFromFs';

    public function handle()
    {
        $this->output->title('Starting RemoveDocumentsFromFs');

        // Your magic here

        $this->output->success('RemoveDocumentsFromFs successful');
    }
}
