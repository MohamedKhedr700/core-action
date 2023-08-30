<?php

namespace Raid\Core\Action\Actions\Contracts\Crud;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface FindByActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $conditions, array $columns = ['*'], bool $trashed = false): ?object;
}
