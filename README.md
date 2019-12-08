Module Link for yii2

====================

Module Link for yii2



Installation

------------

1. The preferred way to install this extension is through [composer](http://getcomposer.org/download/).


Either run


```
php composer.phar require --prefer-dist itshkacomua/yii2-link "dev-master"
```

or add

```
"itshkacomua/yii2-link": "dev-master"
```


to the require section of your `composer.json` file.


2. In the console of the root directory of the site, run the command

 ```
 php yii migrate --migrationPath=@itshkacomua/link/migrations/
```

Usage

-----


Once the extension is installed, simply use it in your code by  :



```php
<?= \itshkacomua\link\AutoloadExample::widget(); ?>
```
