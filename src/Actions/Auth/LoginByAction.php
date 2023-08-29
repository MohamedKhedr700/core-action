<?php

namespace Raid\Core\Action\Actions\Auth;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Auth\LoginByActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class LoginByAction extends Action implements LoginByActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGIN;
}
