<?php

namespace Raid\Core\Action\Actions\Contracts\Concerns;

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
    public function withEvent(): static;

    /**
     * Define action without required events.
     */
    public function withoutEvent(): static;

    /**
     * Initialize action event.
     */
    public function init(array $arguments = []): void;

    /**
     * Trigger action event.
     */
    public function trigger($arguments = null): void;

    /**
     * Get event action instance.
     */
    public function event();
}
