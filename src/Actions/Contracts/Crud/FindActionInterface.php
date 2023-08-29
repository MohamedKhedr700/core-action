<?php

namespace Raid\Core\Action\Actions\Contracts\Crud;

use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Models\Contracts\ModelInterface;

interface FindActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(string|ModelInterface $id, array $columns = ['*']): ?ModelInterface;
}
