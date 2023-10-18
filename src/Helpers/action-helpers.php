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

            return action($actionClass, $data);
        }

        return null;
    }
}

if (! function_exists('action')) {
    /**
     * Get action instance.
     */
    function action(string $actionClass, ...$data): mixed
    {
        $action = app($actionClass);

        if (! empty($data)) {
            $action = $action->execute(...$data);
        }

        return $action;
    }
}