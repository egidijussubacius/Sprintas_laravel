<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


1) Clone repo to your PC.
2) Open VsCode (without any folder) use terminal ( navigate to wanted folder (where composer.phar is located)
for example cd c: , cd "program files/ampps/www"
3) run php composer.phar create-project laravel/laravel <your desired folder name> for example "test"
4) from "test" folder copy vendor folder and put to cloned repo folder.
5) Choice your created folder using VsCode 
6) Run  php ../composer.phar require laravel/ui (or php composer.phar require laravel/ui (it's depend on where the file is located)
7) Rename .env.example ----> .env   or just use existing .env file
8) Configurate .env settings by you.

[DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE="enter_your_DB_name"
DB_USERNAME=root
DB_PASSWORD="enter_your_password"]
9) Create "new Schema" with Mysql workbench ( must be same as in DB DATABASE = "enter_your_DB_name")
10) Run              php artisan migrate
11) Run             php artisan db:seed --class=UserSeeder
12) Run             php artisan serve
13) LOGIN Email --> admin@admin.com
14) LOGIN Pass  --> admin
15) Goodluck for using ;)
