<?php

namespace Raid\Core\Action\Actions\Auth;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Auth\RegisterActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class RegisterAction extends Action implements RegisterActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::REGISTER;
}
