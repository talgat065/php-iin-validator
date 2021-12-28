# Simple IIN Validator in PHP

Easily check IIN if it's correct by calculating check sum.

### For further deatails see the GitHuib Pages site: http://faisalman.github.com/simple-excel-php ###

## PHP Versions Supported

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
$validator->validate($iinString);

```
