<?php

namespace Raid\Core\Action\Actions\Crud;

use Exception;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Enum\Enums\Action as ActionEnum;

abstract class UpdateAction extends Action implements UpdateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::UPDATE;

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function handle(string|object $id, array $data): bool
    {
        return $this->actionable()->update($id, $data);
    }
}
