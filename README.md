# Extended make commands for laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xammie/make-commands.svg?style=flat-square)](https://packagist.org/packages/xammie/make-commands)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/xammie/make-commands/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/xammie/make-commands/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/xammie/make-commands/pint.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/xammie/make-commands/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/xammie/make-commands.svg?style=flat-square)](https://packagist.org/packages/xammie/make-commands)

This package extends the default laravel make commands to create classes like actions, services, enums and more.

```bash
php artisan make:action CreateUserAction
```

This will create the file `app/Actions/CreateUserAction.php`

```php
<?php

namespace App\Actions;

class CreateUserAction
{
    public function handle()
    {
        //
    }
}
```

## Installation

You can install the package via composer:

```bash
composer require --dev xammie/make-commands
```

You can publish the stubs with:

```bash
php artisan vendor:publish --tag="make-commands-stubs"
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="make-commands-config"
```

This is the contents of the published config file:

```php
return [
    'namespaces' => [
        'action' => 'Actions',
        'collection' => 'Collections',
        'config' => 'config',
        'contract' => 'Contracts',
        'dto' => 'Dtos',
        'enum' => 'Enums',
        'interface' => 'Interfaces',
        'repository' => 'Repositories',
        'service' => 'Services',
        'trait' => 'Traits',
    ],
];
```

## Usage

The following commands are available.

```
php artisan make:action CreateUserAction
php artisan make:collection OrderCollection
php artisan make:config config-file
php artisan make:contract CreatesUserContract
php artisan make:dto RestRequestObject
php artisan make:enum OrderStatusEnum
php artisan make:interface OrderRepositoryInterface
php artisan make:repository OrderRepository
php artisan make:service PaymentService
php artisan make:trait TraitHelper
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Max Hoogenbosch](https://github.com/Xammie)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
