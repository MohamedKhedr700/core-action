<?php

namespace Raid\Core\Action\Commands;

use \Illuminate\Console\Command;
class PublishCommand extends Command
{
    /**
     * The console command name.
     */
    protected $name = 'publish:raid-action';

    /**
     * The console command description.
     */
    protected $description = 'Publish core action config files.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->call('vendor:publish', [
            '--tag' => 'config-action'
        ]);
    }
}