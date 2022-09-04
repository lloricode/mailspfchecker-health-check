
# mailspfchecker-health-check

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lloricode/mailspfchecker-health-check.svg?style=flat-square)](https://packagist.org/packages/lloricode/mailspfchecker-health-check)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lloricode/mailspfchecker-health-check/run-tests?label=tests)](https://github.com/lloricode/mailspfchecker-health-check/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lloricode/mailspfchecker-health-check/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/lloricode/mailspfchecker-health-check/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/lloricode/mailspfchecker-health-check.svg?style=flat-square)](https://packagist.org/packages/lloricode/mailspfchecker-health-check)

This package contains a [Laravel Health](https://spatie.be/docs/laravel-health) check if your application can send e-mail in name of a given address.

## Installation

You can install the package via composer:

```bash
composer require lloricode/mailspfchecker-health-check
```

## Usage

```php
// typically, in a service provider

use Spatie\Health\Facades\Health;
use Lloricode\MailspfcheckerHealthCheck\MailspfcheckerCheck;

Health::checks([
    MailspfcheckerCheck::new(),
    
    MailspfcheckerCheck::new()
        ->setEmailOrDomain('info@dietse.dev'),
        
    MailspfcheckerCheck::new()
        ->setEmailOrDomain('info@dietse.dev')
        ->setUserServer('smtp.mandrill.com'),
]);
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
