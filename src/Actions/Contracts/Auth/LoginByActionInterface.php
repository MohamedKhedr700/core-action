<?php

namespace Raid\Core\Actions\Contracts\Auth;

use Modules\Account\Contracts\Login\LoginProviderInterface;
use Modules\Account\Models\Account;
use Raid\Core\Actions\Contracts\ActionInterface;

interface LoginByActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(Account $account): LoginProviderInterface;
}
