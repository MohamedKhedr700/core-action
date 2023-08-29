<?php

namespace Raid\Core\Action\Traits\Action;

trait WithActionResolver
{
    /**
     * The action name.
     */
    public const ACTION = '';

    /**
     * The action repository.
     */
    public const REPOSITORY = '';

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
    public static function repositoryClass(): string
    {
        return static::REPOSITORY;
    }

    /**
     * {@inheritdoc}
     */
    public static function repositoryModule(): string
    {
        return static::repositoryClass()::module();
    }

    /**
     * {@inheritdoc}
     */
    public static function getRepositoryAction(): string
    {
        return static::repositoryModule().'.'.static::action();
    }

    /**
     * {@inheritdoc}
     */
    public static function exec(...$arguments): mixed
    {
        return app(static::class)->execute(...$arguments);
    }
}
