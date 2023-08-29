<?php

namespace Raid\Core\Actions\Auth;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Auth\LoginActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class LoginAction extends Action implements LoginActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGIN;
}
