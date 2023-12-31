<?php

use Raid\Core\Action\Actions\Contracts\ActionInterface;

if (! function_exists('concat_actions')) {
    /**
     * Concatenate actions.
     */
    function concat_actions(...$actions): string
    {
        return implode(' ', $actions);
    }
}

if (! function_exists('actionable')) {
    /**
     * Get actionable instance.
     */
    function actionable(string $actionable, string $action = '', ...$data): mixed
    {
        $actionableActions = $actionable::getActions();

        foreach ($actionableActions as $actionClass) {
            if ($actionClass::action() !== $action) {
                continue;
            }

            return actionable_action($actionClass, ...$data);
        }

        return null;
    }
}

if (! function_exists('actionable_action')) {
    /**
     * Get action instance.
     */
    function actionable_action(string $actionClass, ...$data): ActionInterface
    {
        $action = app($actionClass);

        if (! empty($data)) {
            $action = $action->execute(...$data);
        }

        return $action;
    }
}
