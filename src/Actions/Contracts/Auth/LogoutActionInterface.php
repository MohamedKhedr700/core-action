<?php

namespace Raid\Core\Action\Actions\Contracts\Auth;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface LogoutActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle();
}
