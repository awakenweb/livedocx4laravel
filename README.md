
This package is not maintained anymore
=======
Livedocx service will shut down on Sept. 30th 2017.
--------
Use https://github.com/TextControl/txtextcontrol-reportingcloud-php instead
-----------


livedocx4laravel
================

Laravel Service provider for Awakenweb/Livedocx

Prerequisites
-------------

This package requires:

* php 5.6+
* Laravel 5+
* [awakenweb/livedocx](https://github.com/awakenweb/livedocx)


To use the Laravel 4 version, go to the `laravel-4` branch of this package.
Installation
------------

Add the following line to your composer.json

```json
"require": {
    "awakenweb/livedocx4laravel": "2.*"
}
```

Edit your config/app.php to add the service provider and the facade:

```php
'providers' => [
    ...
    Awakenweb\Livedocx4Laravel\LivedocxServiceProvider::class,
],
...
'aliases' => [
    ...
    'Livedocx' => Awakenweb\Livedocx4Laravel\Facades\Livedocx::class,
],
```

Then run the artisan command to publish the config file:

```shell
php artisan config:publish awakenweb/livedocx4laravel
```

Finally edit the `config/livedocx.php` file.

Change the `wsdl` to match your Livedocx account type (free, premium, or fully licensed), `username`, and `password` for authentication and you are ready to roll!

Use
---

The `Livedocx` facade automatically instanciate Awakenweb/Livedocx/Livedocx and all its dependencies.

Quick example.

```php
//to list all templates present on Livedocx service
$tpl = Livedocx::createRemoteTemplate();
return $tpl->listAll();
```
