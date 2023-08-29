<?php

namespace Raid\Core\Actions\Contracts\Crud;

use Raid\Core\Actions\Contracts\ActionInterface;
use Raid\Core\Models\Contracts\ModelInterface;

interface CreateActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $data): ModelInterface;
}
