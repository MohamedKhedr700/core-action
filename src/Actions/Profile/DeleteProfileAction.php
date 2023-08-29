<?php

namespace Raid\Core\Action\Actions\Profile;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Profile\DeleteProfileActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class DeleteProfileAction extends Action implements DeleteProfileActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::DELETE_PROFILE;
}
