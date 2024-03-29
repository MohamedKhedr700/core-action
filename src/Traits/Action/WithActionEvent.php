<?php

namespace Raid\Core\Action\Traits\Action;

trait WithActionEvent
{
    /**
     * Event action instance.
     */
    protected $event = null;

    /**
     * Indicates if the action should be run with registered events.
     */
    protected bool $withEvent = true;

    /**
     * {@inheritdoc}
     */
    public function setWithEvent(bool $withEvent): void
    {
        $this->withEvent = $withEvent;
    }

    /**
     * {@inheritdoc}
     */
    public function getWithEvent(): bool
    {
        return $this->withEvent;
    }

    /**
     * {@inheritdoc}
     */
    public function withEvent(): static
    {
        $this->setWithEvent(true);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutEvent(): static
    {
        $this->setWithEvent(false);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function init(array $arguments = []): void
    {
        $this->event()?->init($this->action(), ...$arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function trigger($arguments = null): void
    {
        $this->event()?->trigger($this->action(), $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function event()
    {
        if (isset($this->event)) {
            return $this->event;
        }

        if ($this->hasDefinedEvent() && method_exists($this->actionableClass(), 'events')) {
            $this->event = $this->actionableClass()::events($this->action())->setLazyLoad($this->lazyLoad());
        }

        return $this->event;
    }

    /**
     * Determine if the application has a defined event handler.
     */
    private function hasDefinedEvent(): bool
    {
        return (bool) config('event.events_manager');
    }
}
