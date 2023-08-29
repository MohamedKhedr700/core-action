<?php

namespace Raid\Core\Actions\Crud;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Models\Contracts\ModelInterface;

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
