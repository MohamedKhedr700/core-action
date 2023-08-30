<?php

namespace Raid\Core\Action\Actions\Contracts;

interface ActionableInterface
{
    /**
     * Get the action name.
     */
    public static function action(): string;

    /**
     * Get the action repository class.
     */
    public static function repositoryClass(): string;

    /**
     * Get the action repository module name.
     */
    public static function repositoryModule(): string;

    /**
     * Get the action repository action name.
     */
    public static function getRepositoryAction(): string;

    /**
     * Get repository instance.
     */
    public function repository();

    /**
     * Set repository instance.
     */
    public function setRepository($repository): void;

    /**
     * Load the repository.
     */
    public function loadRepository(): void;
}
