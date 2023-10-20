<?php

namespace Raid\Core\Action\Traits\Action;

use Exception;
use Raid\Core\Action\Exceptions\Actionable\InvalidActionableException;

trait WithActionable
{
    /**
     * The action name.
     */
    public const ACTION = '';

    /**
     * The actionable class.
     */
    public const ACTIONABLE = '';

    /**
     * The actionable instance.
     */
    protected object $actionable;

    /**
     * {@inheritdoc}
     */
    public static function action(): string
    {
        return static::ACTION;
    }

    /**
     * {@inheritdoc}
     */
    public static function actionableClass(): string
    {
        return static::ACTIONABLE;
    }

    /**
     * {@inheritdoc}
     */
    public static function actionableName(): string
    {
        return method_exists(static::actionableClass(), 'actionableName')
            ? static::actionableClass()::actionableName()
            : static::getActionableClass();
    }

    /**
     * {@inheritdoc}
     */
    public static function getActionableClass(): string
    {
        return strtolower(class_basename(static::actionableClass()));
    }

    /**
     * {@inheritdoc}
     */
    public static function getAction(): string
    {
        return static::actionableName().'.'.static::action();
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function actionable(): object
    {
        if (! isset($this->actionable)) {
            $this->loadActionable();
        }

        return $this->actionable;
    }

    /**
     * {@inheritdoc}
     *
     * @throws Exception
     */
    public function loadActionable(): void
    {
        $actionableClass = static::actionableClass();

        if (! empty($actionableClass)) {
            $this->actionable = app($actionableClass);

            return;
        }

        $classNamespace = static::class;

        throw new InvalidActionableException("Missing actionable class for action $classNamespace");
    }
}
