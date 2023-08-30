<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\DeleteActionInterface;
use Raid\Core\Enum\Models\Action\Action as ActionEnum;

abstract class DeleteAction extends Action implements DeleteActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::DELETE;

    /**
     * {@inheritdoc}
     */
    public function handle(string|object $id): bool
    {
        return $this->actionable()->destroy($id);
    }
}
