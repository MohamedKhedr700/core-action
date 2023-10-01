# Core Action Package

This package is responsible for handling all actions in the system.

## Installation

``` bash
composer require raid/core-action
```

## Configuration

``` bash
php artisan core:publish-action
```


## Usage

``` php
class UserController extends Controller
{
    /**
     * Invoke the controller method.
     */
    public function __invoke(Request $request, CreateUserAction $action)
    {
        $action->execute($request->only(['name', 'email', 'password']));
    
        // or using the static call
        CreateUserAction::exec($request->only(['name', 'email', 'password']));
    }
}
```

# How to work this

Let's start with our action class `CreateUserAction`.

you can use the command `php artisan core:make-action CreateUserAction` to create the action class.

``` php
<?php

namespace App\Actions;

use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Actions\Action;

class CreateAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = '';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = '';

    /**
     * Handle the action.
     */
    public function handle()
    {
    }
}
```


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [MohamedKhedr700]()

## Security

If you discover any security-related issues, please email
instead of using the issue tracker.

## About Raid

Raid is a PHP framework created by [MohamedKhedr700]()
and is maintained by [MohamedKhedr700]().

## Support Raid

Raid is an MIT-licensed open-source project. It's an independent project with its ongoing development made possible.

