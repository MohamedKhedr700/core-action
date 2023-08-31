<?php

namespace Raid\Core\Action\Traits\Action;

trait WithLazyAction
{
    /**
     * Indicates if the action events should be run lazily.
     */
    protected bool $lazyLoad = true;

    /**
     * {@inheritdoc}
     */
    public function setLazyLoad(bool $lazyLoad): static
    {
        $this->lazyLoad = $lazyLoad;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function lazyLoad(): bool
    {
        return $this->lazyLoad;
    }

    /**
     * {@inheritdoc}
     */
    public function withLazyLoad(): static
    {
        $this->lazyLoad = true;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutLazyLoad(): static
    {
        $this->lazyLoad = false;

        return $this;
    }
}
