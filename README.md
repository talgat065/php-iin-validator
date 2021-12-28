# Simple IIN Validator in PHP

Easily check IIN if it's correct by calculating check sum.

## Requirements

PHP >= 7.1

## Installation
If you're using Composer to manage libraries, include this package in your composer.json
```json
"require" : {
    "talgatfox/php-iin-validator" : "0.1.*"
}
```

## Usage

```php
use Talgatfox\IinValidator\IinValidator;

$validator = new IinValidator();
$isValid = $validator->validate($iinString); // returns true if it's valid otherwise false

```
