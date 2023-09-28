<?php

namespace Raid\Core\Event\Commands;

use Illuminate\Support\Facades\File;
use Raid\Core\Command\Commands\CreateCommand;

class CreateActionCommand extends CreateCommand
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'core:make-action {classname}';

    /**
     * The console command description.
     */
    protected $description = 'Make an action class';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->createCommand();
    }

    /**
     * Return the stub file path.
     */
    public function getStubPath(): string
    {
        return __DIR__.'/../../resources/stubs/action.stub';
    }

    /**
     * Map the stub variables present in stub to its value.
     */
    public function getStubVariables(): array
    {
        return [
            'NAMESPACE' => 'App\\Actions',
            'CLASS_NAME' => $this->getClassName(),
        ];
    }

    /**
     * Get the full path of generated class.
     */
    public function getSourceFilePath(): string
    {
        return app_path('Actions/'.$this->getClassName()).'.php';
    }
}
