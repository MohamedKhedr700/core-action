<?php

namespace Raid\Core\Actions\Crud;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Models\Contracts\ModelInterface;

abstract class FindByAction extends Action implements FindByActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::FIND_BY;

    /**
     * {@inheritdoc}
     */
    public function handle(array $conditions, array $columns = ['*'], bool $trashed = false): ?ModelInterface
    {
        return $this->repository()->findBy($conditions, $columns, $trashed);
    }
}
