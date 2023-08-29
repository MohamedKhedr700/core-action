<?php

namespace Raid\Core\Action\Actions\Profile;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Profile\UpdateProfileActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class UpdateProfileAction extends Action implements UpdateProfileActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::UPDATE_PROFILE;
}
