
# LaraBlog

## Introduction

This project was created to incorporate [Agency](https://startbootstrap.com/template-overviews/agency/) boostrap template with Laravel. This project also used [Voyager](https://laravelvoyager.com/) as its admin.

## Prerequisite
* Composer => https://getcomposer.org/download/

## Installation
#### Download zip file
1. Under the repository name, click Clone or download.
2. Extract the master.zip on your web directory. You can rename the directory to your liking.
3. Create your database.
4. Open \<application name>/.env and change the settings accordingly. If there's no .env file, copy the .env.sample and rename it to .env.
5. Open terminal and run the following commands.
```sh
cd <application name>
composer install
php artisan key:generate
php artisan config:clear
php artisan migrate
php artisan voyager:install --with-dummy
php artisan vendor:publish --force --provider=TCG/Voyager/VoyagerServiceProvider
php artisan serve
```
6. Go to http://localhost:8000
7. Login using:
 * Username: *admin@admin.com*
 * Password: *password*
 
 # ENJOY!

