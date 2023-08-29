<?php

namespace Raid\Core\Actions\Contracts\Crud;

use Raid\Core\Actions\Contracts\ActionInterface;
use Raid\Core\Models\Contracts\ModelInterface;

interface UpdateActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(string|ModelInterface $id, array $data): ModelInterface;
}
