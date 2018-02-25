<p align="center">
    <h1 align="center">ReactJs With Yii2</h1>
</p>

Yii 2 Basic Project with letest Reactjs version 16.02 application best for
rapidly creating small projects.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-basic/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP >= 5.4.0.


INSTALLATION
------------

### Install via Composer

You can install this project using the following command, run the following command from your root project folder:

~~~
composer update
~~~

You can then access the application through the following URL:
~~~
http://localhost/RectJsWithYii2/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => 'xxxx',
    'charset' => 'utf8',
];
```