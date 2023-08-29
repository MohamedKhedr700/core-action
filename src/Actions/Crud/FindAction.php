<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Action\Models\Contracts\ModelInterface;

abstract class FindAction extends Action implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::FIND;

    /**
     * {@inheritdoc}
     */
    public function handle(string|ModelInterface $id, array $columns = ['*']): ?ModelInterface
    {
        return $this->repository()->findOrFail($id, $columns);
    }
}
