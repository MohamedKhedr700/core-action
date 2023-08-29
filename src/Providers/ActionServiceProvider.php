<?php

namespace Raid\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Raid\Core\Traits\Provider\WithEventServiceProviderResolver;

class ActionServiceProvider extends ServiceProvider
{
    use WithEventServiceProviderResolver;

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
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
