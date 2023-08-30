<?php

namespace Raid\Core\Action\Actions\Contracts\Crud;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface CreateActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $data): object;
}
