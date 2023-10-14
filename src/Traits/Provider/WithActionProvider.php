<?php

namespace Raid\Core\Action\Traits\Provider;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

trait WithActionProvider
{
    /**
     * Register config.
     */
    private function registerConfig(): void
    {
        $configResourcePath = glob(__DIR__.'/../../../config/*.php');

        foreach ($configResourcePath as $config) {

            $this->publishes([
                $config => config_path(basename($config)),
            ], 'config-action');
        }
    }

    /**
     * Register helpers.
     */
    private function registerHelpers(): void
    {
        $helpers = glob(__DIR__.'/../../Helpers/*.php');

        foreach ($helpers as $helper) {
            require_once $helper;
        }
    }

    /**
     * Register commands.
     */
    private function registerCommands(): void
    {
        $this->commands($this->commands);
    }

    /**
     * Register actions.
     */
    private function registerAction(): void
    {
        $this->registerActionsFacadeManager();
        $this->registerActionableManager();
    }

    /**
     * Register actions facade manager.
     */
    private function registerActionsFacadeManager(): void
    {
        $actionManager = config('event.actions_manager');

        //        $this->app->singleton(Actions::facade(), $actionManager);
        //        $this->app->singleton(ActionManagerInterface::class, $actionManager);
    }

    /**
     * Register actionable manager
     */
    private function registerActionableManager(): void
    {
        //        $this->app->bind(ActionInterface::class, config('action.actionable_manager'));
    }
}
