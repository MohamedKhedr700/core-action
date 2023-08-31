<?php

namespace Raid\Core\Action\Actions;

use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Actions\Contracts\Concerns\ActionAuthorizationInterface;
use Raid\Core\Action\Actions\Contracts\Concerns\ActionEventInterface;
use Raid\Core\Action\Actions\Contracts\Concerns\LazyActionInterface;
use Raid\Core\Action\Traits\Action\WithActionable;
use Raid\Core\Action\Traits\Action\WithActionAuthorization;
use Raid\Core\Action\Traits\Action\WithActionEvent;
use Raid\Core\Action\Traits\Action\WithActionHelper;
use Raid\Core\Action\Traits\Action\WithActionResolver;
use Raid\Core\Action\Traits\Action\WithLazyAction;

abstract class Action implements ActionAuthorizationInterface, ActionEventInterface, ActionInterface, LazyActionInterface
{
    use WithActionable,
        WithActionAuthorization,
        WithActionEvent,
        WithActionHelper,
        WithActionResolver,
        WithLazyAction;

    /**
     * {@inheritdoc}
     */
    public function execute(...$arguments): mixed
    {
        $this->authorized();

        $this->event()?->init(...$arguments);

        $result = $this->handle(...$arguments);

        $this->event()?->trigger($result);

        return $result;
    }
}
