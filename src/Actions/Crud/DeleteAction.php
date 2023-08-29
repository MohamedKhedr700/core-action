<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Action\Models\Contracts\ModelInterface;

abstract class DeleteAction extends Action implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::DELETE;

    /**
     * {@inheritdoc}
     */
    public function handle(string|ModelInterface $id): bool
    {
        return $this->repository()->destroy($id);
    }
}
