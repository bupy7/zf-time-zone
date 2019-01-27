zf-queue
========

[![Latest Stable Version](https://poser.pugx.org/bupy7/zf-time-zone/v/stable)](https://packagist.org/packages/bupy7/zf-time-zone)
[![Total Downloads](https://poser.pugx.org/bupy7/zf-time-zone/downloads)](https://packagist.org/packages/bupy7/zf-time-zone)
[![Latest Unstable Version](https://poser.pugx.org/bupy7/zf-time-zone/v/unstable)](https://packagist.org/packages/bupy7/zf-time-zone)
[![License](https://poser.pugx.org/bupy7/zf-time-zone/license)](https://packagist.org/packages/bupy7/zf-time-zone)
[![Build Status](https://travis-ci.org/bupy7/zf-time-zone.svg?branch=master)](https://travis-ci.org/bupy7/zf-time-zone)
[![Coverage Status](https://coveralls.io/repos/github/bupy7/zf-time-zone/badge.svg?branch=master)](https://coveralls.io/github/bupy7/zf-time-zone?branch=master)

Module for applying time zone towards the application.

Installation
------------

The preferred way to install this extension is through composer:

```
$ composer require bupy7/zf-time-zone "*"
```

to the require section of your composer.json file.

Additional for Zend Framework 3:

```
$ composer require zendframework/zend-modulemanager "*"
```

Additional for Zend Expressive:

```
$ composer require psr/http-message "*"
$ composer require psr/http-server-middleware "*"
```

Usage
-----

**For Zend Framework 3:**

1. Add `Bupy7\Zf\TimeZone` to module list.

**For Zend Expressive:**

1: Add `Bupy7\Zf\TimeZone\ConfigProvider` to your config project;

2: Add `Bupy7\Zf\TimeZone\Middleware\BootstrapMiddleware` to your middleware pipeline.

**Next:** Set your time zone in a local config:

```php
'time_zone' => [
    'time_zone' => 'Europe/Moscow',
],
```

And profit!

License
-------

zf-time-zone is released under the BSD 3-Clause License.
