<?php

namespace Raid\Core\Actions\Crud;

use Exception;
use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\UpdateActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Models\Contracts\ModelInterface;

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
