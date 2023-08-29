<?php

namespace Raid\Core\Actions\Crud;

use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\PatchActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Models\Contracts\ModelInterface;

abstract class PatchAction extends Action implements PatchActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::PATCH;

    /**
     * {@inheritdoc}
     */
    public function handle(string|ModelInterface $id, array $data): ModelInterface
    {
        return $this->repository()->update($id, $data);
    }
}
