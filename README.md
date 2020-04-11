## Prerequisites

If you don't already have an Apache local environment with PHP and MySQL, use one of the following links:

 - Windows: https://updivision.com/blog/post/beginner-s-guide-to-setting-up-your-local-development-environment-on-windows
 - Linux: https://howtoubuntu.org/how-to-install-lamp-on-ubuntu
 - Mac: https://wpshout.com/quick-guides/how-to-install-mamp-on-your-mac/

Also, you will need to install Composer: https://getcomposer.org/doc/00-intro.md

## Installation

1. Clone this repository
2. In your terminal run `composer install`
3. In your terminal run `npm install` and `npm run dev`
4. Copy `.env.example` to `.env` and updated the configurations (mainly the database configuration)
5. In your terminal run `php artisan key:generate`
6. Run `php artisan migrate --seed` to create the database tables and seed the roles and users tables
7. Run `php artisan storage:link` to create the storage symlink (if you are using **Vagrant** with **Homestead** for development, remember to ssh into your virtual machine and run the command from there).

## Usage

To start testing the Pro theme, register as a user or log in using one of the default users: 

- admin type - **admin@black.com** with the password **secret**
- creator type - **creator@black.com** with the password **secret**
- member type - **member@black.com** with the password **secret**

Make sure to run the migrations and seeders for the above credentials to be available.