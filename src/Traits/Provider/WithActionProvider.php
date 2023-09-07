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
        $this->registerActionsFacadeHandler();
        $this->registerActionableHandler();
    }

    /**
     * Register gates.
     */
    private function registerGates(): void
    {
        $gates = config('gate.gates', []);

        foreach ($gates as $gateable => $gates) {
            foreach ($gates as $gate) {
                (new $gate($gateable))->register();
            }
        }
    }

    /**
     * Register actions facade handler.
     */
    private function registerActionsFacadeHandler(): void
    {
        $actionManager = config('event.actions_handler');

        //        $this->app->singleton(Actions::facade(), $actionManager);
        //        $this->app->singleton(ActionManagerInterface::class, $actionManager);
    }

    /**
     * Register actionable handler.
     */
    private function registerActionableHandler(): void
    {
        //        $this->app->bind(ActionInterface::class, config('action.actionable_handler'));
    }
}
