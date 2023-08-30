<?php

namespace Raid\Core\Action\Actions\Contracts\Crud;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface FindActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(string|object $id, array $columns = ['*']): ?object;
}
