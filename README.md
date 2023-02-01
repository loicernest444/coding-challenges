<h1 align="center"><b>LARAVEL Coding challenge</b></h1>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# **Deployment**

## **Prerequisites**
- install composer
- install PHP "^7.3|^8.0"

To deploy the project, run commands below in the project root directory.<br>

```bash
$ composer install
```
```bash
$ npm install
```
```bash
$ cp .env.example .env
```
```php
$ php artisan key:generate
```
```php
$ php artisan migrate
```
seed the database with roles and two users
```php
$ php artisan db:seed
```
```php
$ npm run dev
```


**_Now your application is available on http://localhost:8000_**<br>
you can connect as administrator with:<br>
username: admin@admin.com<br>
password: password
# **Challenges test**
Run artisan commands below to test other challenges:<br>

```php
$ php artisan simulate:challenge1
```
```php
$ php artisan simulate:challenge2
```
```php
$ php artisan simulate:challenge5
```
