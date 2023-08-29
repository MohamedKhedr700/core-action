<?php

namespace Raid\Core\Actions\Profile;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Profile\UpdateProfileActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class UpdateProfileAction extends Action implements UpdateProfileActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::UPDATE_PROFILE;
}
