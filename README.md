<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


1) Clone repo to your PC.
2) Open VsCode (without any folder) use terminal ( navigate to wanted folder (where composer.phar is located)
for example cd c: , cd "program files" , cd "ampps/www"
3) run php composer.phar create-project laravel/laravel <your desired folder name>
4) put all files from cloned repo to new created folder     (<your desired folder name>)
5) Choice your created folder using VsCode 
6) Rename .env.example ----> .env
7) Configurate .env settings by you.

[DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="enter_your_DB_name"
DB_USERNAME=root
DB_PASSWORD="enter_your_password"]

8) Run              php artisan migrate
9) Run             php artisan db:seed --class=UserSeeder
10) Run             php artisan serve
11) LOGIN Email --> admin@admin.com
12) LOGIN Pass  --> admin
13) Goodluck for using ;)
