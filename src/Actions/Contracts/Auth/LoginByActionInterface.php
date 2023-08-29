<?php

namespace Raid\Core\Action\Actions\Contracts\Auth;

use Modules\Account\Contracts\Login\LoginProviderInterface;
use Modules\Account\Models\Account;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface LoginByActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(Account $account): LoginProviderInterface;
}
