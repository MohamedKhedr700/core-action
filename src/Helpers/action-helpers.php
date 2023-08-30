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
        return app($actionable)->action($action, ...$data);
    }
}
