<?php

namespace Raid\Core\Action\Actions\Contracts\Concerns;

interface ActionableInterface
{
    /**
     * Get the action name.
     */
    public static function action(): string;

    /**
     * Get the actionable class.
     */
    public static function actionableClass(): ?string;

    /**
     * Get the actionable name.
     */
    public static function actionableName(): string;

    /**
     * Get the actionable class name.
     */
    public static function getActionableClass(): string;

    /**
     * Get the action repository action name.
     */
    public static function getAction(): string;

    /**
     * Get actionable instance.
     */
    public function actionable(): object;

    /**
     * Load the actionable.
     */
    public function loadActionable(): void;
}
