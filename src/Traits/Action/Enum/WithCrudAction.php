<?php

namespace Raid\Core\Traits\Action\Enum;

trait WithCrudAction
{
    public const CREATE = 'create';

    public const LIST = 'list';

    public const FIND = 'find';

    public const FIND_BY = 'find_by';

    public const UPDATE = 'update';

    public const PATCH = 'patch';

    public const DELETE = 'delete';

    public const FORCE_DELETE = 'force_delete';

    public const RESTORE = 'restore';
}
