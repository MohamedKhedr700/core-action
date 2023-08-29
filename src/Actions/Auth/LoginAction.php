<?php

namespace Raid\Core\Action\Actions\Auth;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Auth\LoginActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class LoginAction extends Action implements LoginActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::LOGIN;
}
