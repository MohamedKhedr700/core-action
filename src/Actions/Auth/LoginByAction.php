<?php

namespace Raid\Core\Actions\Auth;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Auth\LoginByActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class LoginByAction extends Action implements LoginByActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGIN;
}
