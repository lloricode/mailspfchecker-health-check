
# mailspfchecker-health-check

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lloricode/mailspfchecker-health-check.svg?style=flat-square)](https://packagist.org/packages/lloricode/mailspfchecker-health-check)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lloricode/mailspfchecker-health-check/run-tests?label=tests)](https://github.com/lloricode/mailspfchecker-health-check/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lloricode/mailspfchecker-health-check/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/lloricode/mailspfchecker-health-check/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lloricode/mailspfchecker-health-check.svg?style=flat-square)](https://packagist.org/packages/lloricode/mailspfchecker-health-check)

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require lloricode/mailspfchecker-health-check
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="mailspfchecker-health-check-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="mailspfchecker-health-check-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="mailspfchecker-health-check-views"
```

## Usage

```php
$mailspfcheckerHealthCheck = new Lloricode\MailspfcheckerHealthCheck();
echo $mailspfcheckerHealthCheck->echoPhrase('Hello, Lloricode!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Lloric Mayuga Garcia](https://github.com/lloricode)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
