<?php

namespace Raid\Core\Actions;

use Raid\Core\Actions\Contracts\ActionAuthorizationInterface;
use Raid\Core\Actions\Contracts\ActionEventInterface;
use Raid\Core\Actions\Contracts\ActionInterface;
use Raid\Core\Traits\Action\WithActionAuthorization;
use Raid\Core\Traits\Action\WithActionEvent;
use Raid\Core\Traits\Action\WithActionHelper;
use Raid\Core\Traits\Action\WithActionRepository;
use Raid\Core\Traits\Action\WithActionResolver;

abstract class Action implements ActionInterface, ActionAuthorizationInterface, ActionEventInterface
{
    use WithActionAuthorization,
        WithActionEvent,
        WithActionHelper,
        WithActionRepository,
        WithActionResolver;

    /**
     * {@inheritdoc}
     */
    public function execute(...$arguments): mixed
    {
        $this->authorized();

//        $this->event()->init(...$arguments);

        $result = $this->handle(...$arguments);

//        $this->event()->trigger($result);

        return $result;
    }
}
