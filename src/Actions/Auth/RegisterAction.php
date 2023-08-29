<?php

namespace Raid\Core\Actions\Auth;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Auth\RegisterActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class RegisterAction extends Action implements RegisterActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::REGISTER;
}
