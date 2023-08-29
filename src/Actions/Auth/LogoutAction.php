<?php

namespace Raid\Core\Actions\Auth;

use Modules\Account\Contracts\AccountInterface;
use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Auth\LogoutActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

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
