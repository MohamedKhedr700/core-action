<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Actions Handler
    |--------------------------------------------------------------------------
    | Here you can define the actions handler that will be used in the application.
    |
    */

    'actions_handler' => '',

    /*
    |--------------------------------------------------------------------------
    | Actionable Handler
    |--------------------------------------------------------------------------
    | Here you can define the actionable handler that will be used in the application.
    |
    */

    'actionable_handler' => \Raid\Core\Action\Actions\Action::class,


    /*
    |--------------------------------------------------------------------------
    | Eventable Handler
    |--------------------------------------------------------------------------
    | Here you can define the eventable handler that will be used in the application.
    |
    */

    'eventable_handler' => null,

    /*
    |--------------------------------------------------------------------------
    | Actions
    |--------------------------------------------------------------------------
    | Here you can define the actions that will be used in the application.
    | The actions must be defined in the following format:
    | actionable::class => [
    |     action::class,
    | ],
    |
    */

    'actions' => [],
];
