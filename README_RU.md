Модуль ссылок для yii2

====================

Модуль ссылок для yii2



Установка

------------

1. Предпочтительный способ установить это расширение через [composer](http://getcomposer.org/download/).

Просто запустите в консоли команду:

```
php composer.phar require --prefer-dist itshkacomua/yii2-link "dev-master"
```

или добавьте

```
"itshkacomua/yii2-link": "dev-master"
```

в `require` секцию вашего `composer.json` файла.

2. В консоли корневого каталога сайта выполните команду

 ```
 php yii migrate --migrationPath=@itshkacomua/link/migrations/
```

Использование

-----

Как только вы установили расширение, вы можете её использовать в своём коде:


```php
<?= \itshkacomua\link\AutoloadExample::widget(); ?>
```
