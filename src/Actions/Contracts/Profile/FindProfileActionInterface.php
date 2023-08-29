<?php

namespace Raid\Core\Action\Actions\Contracts\Profile;

use Modules\Account\Contracts\AccountInterface;

interface FindProfileActionInterface
{
    /**
     * Handle the action.
     */
    public function handle(): AccountInterface;
}
