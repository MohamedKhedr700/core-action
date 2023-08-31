<?php

namespace Raid\Core\Action\Traits\Action;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

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
    public function withEvent(): ActionInterface
    {
        $this->setWithEvent(true);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutEvent(): ActionInterface
    {
        $this->setWithEvent(false);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function event()
    {
        if ($this->eventWorkerDefined() && ! isset($this->event)) {
            $this->event = eventable($this->actionableClass(), $this->action())->setLazyLoad($this->lazyLoad());
        }

        return $this->event;
    }

    /**
     * {@inheritdoc}
     */
    private function eventWorkerDefined(): bool
    {
        return (bool) config('event.events_handler');
    }
}
