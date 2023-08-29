<?php

namespace Raid\Core\Action\Traits\Action;

use Raid\Core\Actions\Contracts\ActionInterface;
use Raid\Core\Events\Contracts\EventActionInterface;

trait WithActionEvent
{
    /**
     * Event action instance.
     */
    protected EventActionInterface $event;

    /**
     * Indicates if the action should be run with registered events.
     */
    protected bool $withEvent = true;

    /**
     * Indicates if the action should be run events lazily.
     */
    protected bool $lazyEvent = true;

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
    public function setLazyEvent(bool $lazyEvent): void
    {
        $this->lazyEvent = $lazyEvent;
    }

    /**
     * {@inheritdoc}
     */
    public function getLazyEvent(): bool
    {
        return $this->lazyEvent;
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
    public function withLazyEvent(): ActionInterface
    {
        $this->setLazyEvent(true);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutLazyEvent(): ActionInterface
    {
        $this->setLazyEvent(false);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function event(): EventActionInterface
    {
        if (! isset($this->event)) {
            $this->event = event_action($this->getRepositoryAction(), $this->getWithEvent(), $this->getLazyEvent());
        }

        return $this->event;
    }
}
