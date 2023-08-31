<?php

namespace Raid\Core\Action\Actions\Contracts;

interface ActionEventInterface
{
    /**
     * Set with event.
     */
    public function setWithEvent(bool $withEvent): void;

    /**
     * Get with event.
     */
    public function getWithEvent(): bool;

    /**
     * Define action with required events.
     */
    public function withEvent(): ActionInterface;

    /**
     * Define action without required events.
     */
    public function withoutEvent(): ActionInterface;

    /**
     * Get event action instance.
     */
    public function event();
}
