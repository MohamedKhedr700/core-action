<?php

namespace Raid\Core\Actions\Contracts\Crud;

use Raid\Core\Actions\Contracts\ActionInterface;
use Raid\Core\Models\Contracts\ModelInterface;

interface FindByActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $conditions, array $columns = ['*'], bool $trashed = false): ?ModelInterface;
}
