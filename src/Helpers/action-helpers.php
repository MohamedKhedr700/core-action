<?php

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

            return action($action, $data);
        }

        return null;
    }
}

if (! function_exists('action')) {
    /**
     * Get action instance.
     */
    function action(string $action, ...$data): mixed
    {
        $action = app($action);

        if (! empty($data)) {
            $action = $action->execute(...$data);
        }

        return $action;
    }
}