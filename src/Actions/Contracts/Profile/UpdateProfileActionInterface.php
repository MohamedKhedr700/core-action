<?php

namespace Raid\Core\Action\Actions\Contracts\Profile;

use Raid\Core\Action\Contracts\Account\AccountInterface;

interface UpdateProfileActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(): AccountInterface;
}
