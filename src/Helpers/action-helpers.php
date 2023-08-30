<?php

if (! function_exists('actionable')) {
    /**
     * Get actionable instance.
     */
    function actionable(string $actionable, string $action = '', ...$data): mixed
    {
        return app($actionable)->action($action, ...$data);
    }
}
