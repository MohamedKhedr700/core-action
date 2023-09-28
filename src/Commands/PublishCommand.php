<?php

namespace Raid\Core\Action\Commands;

use Raid\Core\Command\Commands\PublishCommand as CorePublishCommand;

class PublishCommand extends CorePublishCommand
{
    /**
     * The console command name.
     */
    protected $name = 'core:publish-action';

    /**
     * The console command description.
     */
    protected $description = 'Publish core action config files.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->publishCommand('config-action');
    }
}