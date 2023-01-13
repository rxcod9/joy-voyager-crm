<?php

namespace Joy\VoyagerCrm\Console\Commands;

use Illuminate\Console\Command;

class PerformLuceneIndexing extends Command
{
    protected $name = 'joy-voyager-crm:perform_lucene_indexing';

    protected $description = 'Joy VoyagerCrm PerformLuceneIndexing';

    public function handle()
    {
        $this->output->title('Starting PerformLuceneIndexing');

        // Your magic here

        $this->output->success('PerformLuceneIndexing successful');
    }
}
