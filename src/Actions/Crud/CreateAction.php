<?php

namespace Raid\Core\Action\Actions\Crud;

use Exception;
use Raid\Core\Action\Actions\Action;
use Raid\Core\Action\Actions\Contracts\Crud\CreateActionInterface;
use Raid\Core\Action\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Action\Models\Contracts\ModelInterface;

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
    public function handle(array $data): ModelInterface
    {
        return $this->repository()->create($data);
        //        return new Account($data);
    }
}
