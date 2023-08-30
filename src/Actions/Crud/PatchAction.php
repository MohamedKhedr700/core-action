<?php

namespace Raid\Core\Action\Actions\Crud;

use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\PatchActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Action\Models\Contracts\ModelInterface;

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
        return $this->actionable()->update($id, $data);
    }
}
