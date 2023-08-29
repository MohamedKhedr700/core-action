<?php

namespace Raid\Core\Models\Action\Enum;

use Raid\Core\Traits\Action\Enum\WithAuthAction;
use Raid\Core\Traits\Action\Enum\WithCrudAction;
use Raid\Core\Traits\Action\Enum\WithProfileAction;
use Raid\Core\Traits\Enum\ConstEnum;

enum Action: string
{
    use ConstEnum,
        WithCrudAction,
        WithAuthAction,
        WithProfileAction;
}
