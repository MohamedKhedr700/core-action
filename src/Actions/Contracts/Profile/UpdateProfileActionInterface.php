<?php

namespace Raid\Core\Actions\Contracts\Profile;

use Raid\Core\Contracts\Account\AccountInterface;

interface UpdateProfileActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(): AccountInterface;
}
