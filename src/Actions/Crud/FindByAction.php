<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\FindByActionInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;

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
        return $this->actionable()->findBy($conditions, $columns, $trashed);
    }
}
