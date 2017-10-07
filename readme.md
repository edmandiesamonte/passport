<p align="center"><img src="https://laravel.com/assets/img/components/logo-passport.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/passport"><img src="https://travis-ci.org/laravel/passport.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/passport"><img src="https://poser.pugx.org/laravel/passport/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/passport"><img src="https://poser.pugx.org/laravel/passport/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/passport"><img src="https://poser.pugx.org/laravel/passport/license.svg" alt="License"></a>
</p>

## Introduction
> This is a fork of the official Laravel Passport to support string-based OAuth2 Client IDs

Laravel Passport is an OAuth2 server and API authentication package that is simple and enjoyable to use.

## Installation
```
composer require edmandiesamonte/passport 4.0-dev
```

## Official Documentation

Documentation for Passport can be found on the [Laravel website](http://laravel.com/docs/master/passport).

## Custom Client ID generator
Code example:
```php
Passport::setClientIdGenerator(function($clientName){
    return str_slug($clientName) . "-" . bin2hex(random_bytes(2));
});
```

This example will generate something like `mobile-app-client-f8`

This is helpful if you want to generate fixed-length Client IDs and to discourage brute-force Client ID guess attacks.


## License

Laravel Passport is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
