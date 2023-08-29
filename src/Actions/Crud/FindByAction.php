<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Action\Models\Contracts\ModelInterface;

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
