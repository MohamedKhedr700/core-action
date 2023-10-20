<?php

namespace Raid\Core\Action\Traits\Action;

use Raid\Core\Action\Actions\Contracts\ActionInterface;

trait Actionable
{
    /**
     * Actionable class name.
     */
    public static function actionable(): string
    {
        return static::class;
    }

    /**
     * Actionable execute name.
     */
    public static function actionableName(): string
    {
        return strtolower(class_basename(static::actionable()));
    }

    /**
     * Invoke action.
     */
    public static function action(string $action = '', ...$data): mixed
    {
        return actionable(static::actionable(), $action, ...$data);
    }

    /**
     * Get eventable actions.
     */
    public static function getActions(): array
    {
        return config('action.actions')[static::actionable()] ?? [];
    }
}
