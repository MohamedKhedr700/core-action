<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\FindActionInterface;
use Raid\Core\Enum\Action\Models\Action\Action as ActionEnum;

abstract class FindAction extends Action implements FindActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::FIND;

    /**
     * {@inheritdoc}
     */
    public function handle(string|object $id, array $columns = ['*']): ?object
    {
        return $this->actionable()->findOrFail($id, $columns);
    }
}
