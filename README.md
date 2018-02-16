# EnvatoMarket PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/EnvatoMarket-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/EnvatoMarket-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/envatomarket-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/EnvatoMarket-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/EnvatoMarket-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/EnvatoMarket-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/EnvatoMarket-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/envatomarket-php-client
```

## Usage

```php
<?php

$client = new BrianFaust\EnvatoMarket\Client([
    'client_id' => 'your_client_id',
    'client_secret' => 'your_client_secret',
    'access_token' => 'your_access_token'
]);

dump($client->api('Account')->info()->json());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
