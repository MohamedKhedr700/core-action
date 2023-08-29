<?php

namespace Raid\Core\Actions\Contracts;

use Raid\Core\Repositories\Contracts\RepositoryInterface;

interface ActionInterface
{
    /**
     * Execute the action statically.
     */
    public static function exec(...$arguments): mixed;

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
    public function repository(): RepositoryInterface;

    /**
     * Set repository instance.
     */
    public function setRepository(RepositoryInterface $repository): void;

    /**
     * Load the repository.
     */
    public function loadRepository(): void;

    /**
     * Execute the action.
     */
    public function execute(...$arguments): mixed;
}
