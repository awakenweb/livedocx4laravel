
livedocx4laravel
================

Laravel Service provider for Awakenweb/Livedocx

Prerequisites
-------------

This package requires:

* php 5.4+
* Laravel 4
* [awakenweb/livedocx](https://github.com/awakenweb/livedocx)

Installation
------------

Add the following line to your composer.json

```json
"require": {
    "awakenweb/livedocx4laravel": "1.0"
}
```

Edit your config/app.php to add the service provider and the facade:

```php
'providers' => [
    ...
    'Awakenweb\Livedocx4Laravel\LivedocxServiceProvider',
],
...
'aliases' => [
    ...
    'Livedocx' => 'Awakenweb\Livedocx4Laravel\Facades\Livedocx'
],
```

Then run the artisan command to publish the config file:

```shell
php artisan config:publish awakenweb/livedocx4laravel
```

Finally edit the `app/config/packages/awakenweb/livedocx4laravel/config.php`.

Change the `wsdl` to match your Livedocx account type (free, premium, or fully licensed), `username`, and `password` for authentication and you are ready to roll!

Use
---

The `Livedocx` facade automatically instanciate Awakenweb/Livedocx/Livedocx and all its dependencies.

Quick example.

```php
//to list all templates present on Livedocx service
$tpl = Livedocx::createRemoteTemplate();
return $tpl->getAll();
```