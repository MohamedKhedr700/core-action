<?php

namespace Raid\Core\Action\Traits\Action;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Gate;
use Raid\Core\Action\Actions\Contracts\ActionInterface;

trait WithActionAuthorization
{
    /**
     * Indicates if the action should be run with authorization.
     */
    protected bool $authorize = true;

    /**
     * Indicates if the action is authorized to run.
     */
    protected bool $authorized = false;

    /**
     * {@inheritdoc}
     */
    public function setAuthorize(bool $authorize): void
    {
        $this->authorize = $authorize;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorize(): bool
    {
        return $this->authorize;
    }

    /**
     * {@inheritdoc}
     */
    public function setAuthorized(bool $authorized): void
    {
        $this->authorized = $authorized;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorized(): bool
    {
        return $this->authorized;
    }

    /**
     * {@inheritdoc}
     */
    public function withAuthorization(): ActionInterface
    {
        $this->setAuthorize(true);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function withoutAuthorization(): ActionInterface
    {
        $this->setAuthorize(false);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function hasDefinedGate(): bool
    {
        return Gate::has(static::getRepositoryAction());
    }

    /**
     * {@inheritdoc}
     *
     * @throws AuthorizationException
     */
    public function authorize(...$arguments): void
    {
        if (! $this->getAuthorize() || ! $this->hasDefinedGate()) {
            return;
        }

        Gate::authorize(static::getRepositoryAction(), ...$arguments);

        $this->setAuthorized(true);
    }

    /**
     * {@inheritdoc}
     */
    public function authorized(): void
    {
        if (! $this->getAuthorize() || $this->getAuthorized() || ! $this->hasDefinedGate()) {
            return;
        }

        //        Gate::authorize(static::getRepositoryAction());
    }
}
