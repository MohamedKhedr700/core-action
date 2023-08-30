<?php

namespace Raid\Core\Action\Actions\Contracts;

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
