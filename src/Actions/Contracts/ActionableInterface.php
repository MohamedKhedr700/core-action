<?php

namespace Raid\Core\Action\Actions\Contracts;

interface ActionableInterface
{
    /**
     * Get the action name.
     */
    public static function action(): string;

    /**
     * Get the actionable class.
     */
    public static function actionableClass(): string;

    /**
     * Get the actionable name.
     */
    public static function actionableName(): string;

    /**
     * Get the action repository action name.
     */
    public static function getAction(): string;

    /**
     * Set actionable instance.
     */
    public function setActionable(object $actionable): void;

    /**
     * Get actionable instance.
     */
    public function actionable(): object;

    /**
     * Load the actionable.
     */
    public function loadActionable(): void;
}
