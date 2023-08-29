<?php

namespace Raid\Core\Actions\Crud;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Models\Contracts\ModelInterface;

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
