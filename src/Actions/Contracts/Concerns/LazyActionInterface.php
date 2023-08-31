<?php

namespace Raid\Core\Action\Actions\Contracts\Concerns;

interface LazyActionInterface
{
    /**
     * Set event lazy load state.
     */
    public function setLazyLoad(bool $lazyLoad): static;

    /**
     * Get event lazy load state.
     */
    public function lazyLoad(): bool;

    /**
     * Set event lazy load state to true.
     */
    public function withLazyLoad(): static;

    /**
     * Set event lazy load state to false.
     */
    public function withoutLazyLoad(): static;
}
