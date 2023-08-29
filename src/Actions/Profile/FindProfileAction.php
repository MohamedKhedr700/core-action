<?php

namespace Raid\Core\Action\Actions\Profile;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Profile\FindProfileActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;

abstract class FindProfileAction extends Action implements FindProfileActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = ActionEnum::FIND_PROFILE;
}
