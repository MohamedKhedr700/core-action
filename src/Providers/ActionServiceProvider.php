<?php

namespace Raid\Core\Action\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Action\Traits\Provider\WithActionProvider;

class ActionServiceProvider extends ServiceProvider
{
    use WithActionProvider;

    /**
     * The commands to be registered.
     */
    protected array $commands = [];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerConfig();
        $this->registerHelpers();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->registerAction();
    }
}
