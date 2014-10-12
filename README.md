Yii2-Start themes.
=======================
This is the main themes extension for Yii2-Start application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vova07/yii2-start-themes "*"
```

or add

```
"vova07/yii2-start-themes": "*"
```

to the require section of your `composer.json` file.

Configuration
-------------

Edit `view` section in your backend application config file:

```php
'view' => [
    'theme' => 'vova07\themes\admin\Theme'
],
```

or

```php
'view' => [
    'theme' => 'vova07\themes\site\Theme'
],
```