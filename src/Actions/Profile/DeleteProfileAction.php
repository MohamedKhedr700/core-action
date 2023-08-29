<?php

namespace Raid\Core\Actions\Profile;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Profile\DeleteProfileActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class DeleteProfileAction extends Action implements DeleteProfileActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::DELETE_PROFILE;
}
