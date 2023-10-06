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

you can use the command to create the action class.

``` bash
php artisan make-action CreateUserAction
```

``` php
<?php

namespace App\Actions;

use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Actions\Action;

class CreateUserAction extends Action implements ActionInterface
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

The action class must implement `ActionInterface` interface.

The action class must extend `Action` class.

The action class must define `ACTION` constant, which is the action name.

The action class must define `ACTIONABLE` constant, which is the action related actionable class.

The action class must define `handle` method, which is the method that will be called when the action is executed.

Let's finish our action class.

``` php
<?php

namespace App\Actions;

use App\Models\User;
use Raid\Core\Action\Actions\Contracts\ActionInterface;
use Raid\Core\Action\Actions\Action;

class CreateUserAction extends Action implements ActionInterface
{
    /**
     * {@inheritdoc}
     */
    public const ACTION = 'create';

    /**
     * {@inheritDoc}
     */
    public const ACTIONABLE = User::class;

    /**
     * Handle the action.
     */
    public function handle(array $data): User
    {
        return $this->actionable()->create($data);
    }
}
```

The `handle` method will be called when the action is executed.

The `actionable` method will return the model that the action is related to.

Now we have everything ready to execute the action.

``` php
class UserController extends Controller
{
    /**
     * Invoke the controller method.
     */
    public function __invoke(Request $request, CreateUserAction $action)
    {
        $user = $action->execute($request->only(['name', 'email', 'password']));
    }
}
```

The user is created, and everything is fine, but we can structure our pattern more.

### Execute action from a model

We need to use the `Actionable` trait in our actionable class.

This will allow us to execute the action from the actionable class itself,
and will relate the class with its actions.

``` php
<?php

namespace App\Models;

use Raid\Core\Action\Traits\Action\Actionable;

class User extends Account
{
    use Actionable;
}
```

We can define the actions in two ways.

- Define `getActions` method.

``` php
<?php

namespace App\Models;

use Raid\Core\Action\Traits\Action\Actionable;

class User extends Account
{
    use Actionable;
    
    /**
     * Get eventable actions.
     */
    public static function getActions(): array
    {
        return [
            // here we define our action classes.
            CreateUserAction::class,
        ];
    }
}
```

- or define actionable classes with actions in the `config/action.php` file.

``` php
'actions' => [
    // here we define our actionable class.
    User::class => [
        // here we define our action classes.
        CreateUserAction::class,
    ],
], 
```

Now we can execute the action from the model itself.

``` php
class UserController extends Controller
{
    /**
     * Invoke the controller method.
     */
    public function __invoke(Request $request)
    {
        $user = User::action('create', $request->only(['name', 'email', 'password']));
    }
}
```

The action will be executed and the model will be created.


<br>

And that's it.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- **[Mohamed Khedr](https://github.com/MohamedKhedr700)**

## Security

If you discover any security-related issues, please email
instead of using the issue tracker.

## About Raid

Raid is a PHP framework created by **[Mohamed Khedr](https://github.com/MohamedKhedr700)**,
and it is maintained by **[Mohamed Khedr](https://github.com/MohamedKhedr700)**.

## Support Raid

Raid is an MIT-licensed open-source project. It's an independent project with its ongoing development made possible.

