<?php

namespace Raid\Core\Actions\Contracts;

interface ActionAuthorizationInterface
{
    /**
     * Set action authorization.
     */
    public function setAuthorize(bool $authorize): void;

    /**
     * Get action authorization.
     */
    public function getAuthorize(): bool;

    /**
     * Set action authorized.
     */
    public function setAuthorized(bool $authorized): void;

    /**
     * Get action authorized.
     */
    public function getAuthorized(): bool;

    /**
     * Define action with required authorization.
     */
    public function withAuthorization(): ActionInterface;

    /**
     * Define action without required authorization.
     */
    public function withoutAuthorization(): ActionInterface;

    /**
     * Determine if the action has a defined gate.
     */
    public function hasDefinedGate(): bool;

    /**
     * Authorize the action.
     */
    public function authorize(...$arguments): void;

    /**
     * Determine if the action is authorized to run.
     */
    public function authorized(): void;
}
