<?php

namespace Raid\Core\Action\Traits\Action;

trait WithActionResolver
{
    /**
     * {@inheritdoc}
     */
    public static function exec(...$arguments): mixed
    {
        return app(static::class)->execute(...$arguments);
    }
}
