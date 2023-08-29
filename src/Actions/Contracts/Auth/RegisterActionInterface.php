<?php

namespace Raid\Core\Action\Actions\Contracts\Auth;

use Modules\Account\Contracts\Login\LoginProviderInterface;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

interface RegisterActionInterface extends ActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(array $data): LoginProviderInterface;
}
