<?php

namespace Raid\Core\Actions\Profile;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Profile\FindProfileActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;

abstract class FindProfileAction extends Action implements FindProfileActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::FIND_PROFILE;
}
