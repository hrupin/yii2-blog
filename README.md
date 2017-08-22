# yii2-blog

- Для личного использования, крайне не рекомендую устанавливать. Поддержки нет и не будет.

- For personal use it is not recommend to install. No support and never will.

## install

### composer

```
composer require hrupin/yii2-blog
```
or in **composer.json**
```
"hrupin/yii2-blog": "*"
```

### configure

in **common/config/main.php**

```
'modules' => [
        'blog' => [
            'class' => 'hrupin\blog\Module',
        ],
    ],
```

in **frontend/config/main.php**

```
'modules' => [
    'blog' => [
        'as frontend' => 'hrupin\blog\filters\FrontendFilter',
    ],
]
```

in **backend/config/main.php**

```
'modules' => [
    'blog' => [
        'as backend' => 'hrupin\blog\filters\BackendFilter',
    ],
],
```

### migrate

```
 php yii migrate/up --migrationPath=@vendor/hrupin/yii2-blog/migrations
 ```
