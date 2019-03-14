# Cookhub_Laravel
料理レシピ投稿サイト

## For Laravel Practice

## Env
- Winodws 10
- 
## Sequence to start laravel 5.2 project
### 1. Config設定
```
Config/app.php
#'timezone' => 'UTC', #55行目あたり
'timezone' => 'Asia/Tokyo',

#'locale' => 'en', #68行目あたり
'locale' => 'ja',

```

### 2. DB設定
```
.env
set db config
```

```
# Root user login
$ mysql -u root 

# Create db
$ create database cookhub_db;
$ create user cookhub_user@localhost identified by 'secret';
$ grant all on cookhub_db.* to  cokhub_user@localhost identified by 'secret';
$ mysql -u cookhub_user -p cookhub_db
```

### 3. Install debugger for laravel
#### install
```
$  composer require barryvdh/laravel-debugbar:2.4
```

#### add service provider
```
 config/app.php

  'providers' => [
        ：
  Barryvdh\Debugbar\ServiceProvider::class,
  ],

  'aliases' => [
        ：
  'Debugbar' => Barryvdh\Debugbar\Facade::class,
  ],

.env
APP_DEBUG=true

$ php artisan config:cache
```

### 4. install Laravel Elixer
```
$ npm i -g gulp
$ npm i
```

### 5. Question form make
```
Make resources/views/request/confirm.blade.php and index.blade.php

Make controller
$ php artisan make:controller RequController

app/Http/Controllers/RequController
```