# EnvatoMarket PHP Client

[![Build Status](https://img.shields.io/travis/plients/EnvatoMarket-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/EnvatoMarket-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/envatomarket.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/EnvatoMarket-PHP-Client.svg?style=flat-square)](https://github.com/plients/EnvatoMarket-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/EnvatoMarket-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/EnvatoMarket-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require plients/envatomarket
```

## Usage

```php
<?php

$client = new Plients\EnvatoMarket\Client([
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

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
