<?php

namespace Raid\Core\Action\Actions\Crud;

use Exception;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Action\Models\Contracts\ModelInterface;

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
    public function handle(string|ModelInterface $id, array $data): ModelInterface
    {
        return $this->repository()->update($id, $data);
    }
}
