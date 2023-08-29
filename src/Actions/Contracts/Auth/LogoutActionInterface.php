<?php

namespace Raid\Core\Actions\Contracts\Auth;

use Raid\Core\Actions\Contracts\ActionInterface;

interface LogoutActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle();
}
