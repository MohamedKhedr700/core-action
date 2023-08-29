<?php

namespace Raid\Core\Action\Gates\Contracts;

interface GateInterface
{
    /**
     * Get gate repository.
     */
    public function repository(): string;

    /**
     * Get repository actions.
     */
    public function getRepositoryActions();

    /**
     * Register gate.
     */
    public function register(): void;

    /**
     * Define an action gate.
     */
    public function defineActionGate(string $repositoryAction, string $action): void;
}
