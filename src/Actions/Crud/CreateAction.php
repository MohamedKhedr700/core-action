<?php

namespace Raid\Core\Action\Actions\Crud;

use Exception;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\CreateActionInterface;
use Raid\Core\Enum\Models\Action\Action as ActionEnum;

abstract class CreateAction extends Action implements CreateActionInterface
{
    /**
     * {@inheritDoc}
     */
    public const ACTION = ActionEnum::CREATE;

    /**
     * {@inheritDoc}
     *
     * @throws Exception
     */
    public function handle(array $data): object
    {
        return $this->actionable()->create($data);
    }
}
