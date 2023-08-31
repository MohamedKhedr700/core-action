<?php

namespace Raid\Core\Action\Actions\Contracts;

use Raid\Core\Action\Actions\Contracts\Concerns\ActionableInterface;

interface ActionInterface extends ActionableInterface
{
    /**
     * Execute the action statically.
     */
    public static function exec(...$arguments): mixed;

    /**
     * Execute the action.
     */
    public function execute(...$arguments): mixed;
}
