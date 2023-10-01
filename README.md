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
$user = User::create($data);

User::events('create', $user);

// or using the trigger method
User::events()->trigger('create', $user);

// using the facade
Events::trigger('user.create', $user);

// using the helper
events()->trigger('user.create', $user);
```

# How to work this

Let's start with our eventable class `User`.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Credits

- [Mohamed Khedr]

## Security

If you discover any security-related issues, please email
instead of using the issue tracker.

## About Raid

Raid is a PHP framework created by [Mohamed Khedr]
and is maintained by [Mohamed Khedr].

## Support Raid

Raid is an MIT-licensed open-source project. It's an independent project with its ongoing development made possible.

