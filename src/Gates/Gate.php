<?php

namespace Raid\Core\Gates;

use Illuminate\Support\Facades\Gate as GateFacade;
use Illuminate\Support\Str;
use Modules\Account\Contracts\AccountInterface;
use Raid\Core\Gates\Contracts\GateInterface;

abstract class Gate implements GateInterface
{
    /**
     * Gate repository.
     */
    private string $repository;

    /**
     * Create a new gate instance.
     */
    public function __construct(string $repository)
    {
        $this->repository = $repository;
    }

    /**
     * {@inheritdoc}
     */
    public function repository(): string
    {
        return $this->repository;
    }

    /**
     * {@inheritdoc}
     */
    public function getRepositoryActions()
    {
        return $this->repository()::actions();
    }

    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $repositoryActions = $this->getRepositoryActions();

        foreach ($repositoryActions as $action) {
            $this->defineActionGate($action::getRepositoryAction(), $action::action());
        }
    }

    /**
     * {@inheritdoc}
     */
    public function defineActionGate(string $repositoryAction, string $action): void
    {
        $method = Str::camel($action);

        if (! method_exists($this, $method)) {
            return;
        }

        GateFacade::define($repositoryAction, function (AccountInterface $account, ...$arguments) use ($method) {
            return $this->{$method}($account, ...$arguments);
        });
    }
}
