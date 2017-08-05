# yii2-blog

- Для личного использования, крайне не рекомендую устанавливать. Поддержки нет и не будет.

- For personal use it is not recommend to install. No support and never will.

### install

composer

```
composer require hrupin/yii2-blog
```

configure **common/config/main.php**

```
'modules' => [
        'blog' => [
            'class' => 'hrupin\blog\Module',
        ],
    ],
```

migrate

```
 php yii migrate/up --migrationPath=@vendor/hrupin/yii2-blog/migrations
 ```
