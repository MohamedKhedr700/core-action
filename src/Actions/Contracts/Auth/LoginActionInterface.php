<?php

namespace Raid\Core\Actions\Contracts\Auth;

use Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Actions\Contracts\ActionInterface;

interface LoginActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $credentials): LoginProviderInterface;
}
