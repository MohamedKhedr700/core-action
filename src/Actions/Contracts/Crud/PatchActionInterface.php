<?php

namespace Raid\Core\Action\Actions\Contracts\Crud;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface PatchActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(string|object $id, array $data): object;
}
