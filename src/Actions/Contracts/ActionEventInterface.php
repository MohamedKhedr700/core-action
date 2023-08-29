<?php

namespace Raid\Core\Action\Actions\Contracts;

use Raid\Core\Action\Events\Contracts\EventActionInterface;

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
     * Set lazy event.
     */
    public function setLazyEvent(bool $lazyEvent): void;

    /**
     * Get lazy event.
     */
    public function getLazyEvent(): bool;

    /**
     * Define action with required events.
     */
    public function withEvent(): ActionInterface;

    /**
     * Define action without required events.
     */
    public function withoutEvent(): ActionInterface;

    /**
     * Define action with lazy events.
     */
    public function withLazyEvent(): ActionInterface;

    /**
     * Define action without lazy events.
     */
    public function withoutLazyEvent(): ActionInterface;

    /**
     * Get event action instance.
     */
    public function event(): EventActionInterface;
}
