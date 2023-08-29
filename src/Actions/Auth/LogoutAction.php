<?php

namespace Raid\Core\Action\Actions\Auth;

use Modules\Account\Contracts\AccountInterface;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Auth\LogoutActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class LogoutAction extends Action implements LogoutActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGOUT;

    /**
     * {@inheritdoc}
     */
    public function handle(): AccountInterface
    {
        $account = account();

        $account->currentAccessToken()->delete();

        $account->devices()->detach($account->currentDeviceId());

        return $account;
    }
}
