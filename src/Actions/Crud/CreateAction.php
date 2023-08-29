<?php

namespace Raid\Core\Actions\Crud;

use Exception;
use Raid\Core\Actions\Action;
use Raid\Core\Actions\Contracts\Crud\CreateActionInterface;
use Raid\Core\Models\Action\Enum\Action as ActionEnum;
use Raid\Core\Models\Contracts\ModelInterface;

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
