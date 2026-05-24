> [!Warning]
> The main Voyager repository is archived by [The Control Group](https://www.thecontrolgroup.com) as there are many more modern options available. You may still use Voyager, but it will not be receiving any more updates.

> [!Note]
> This repository is fun place for my personal usage and still is under adjustment


<p align="center">
<a href="https://packagist.org/packages/tuyck/voyager"><img src="https://poser.pugx.org/tuyck/voyager/downloads.svg?format=flat" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/tuyck/voyager"><img src="https://poser.pugx.org/tuyck/voyager/v/stable.svg?format=flat" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/tuyck/voyager"><img src="https://poser.pugx.org/tuyck/voyager/license.svg?format=flat" alt="License"></a>
<a href="https://github.com/larapack/awesome-voyager"><img src="https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg" alt="Awesome Voyager"></a>
</p>

# **V**oyager - The Missing Laravel Admin

![Voyager Screenshot](https://s3.amazonaws.com/thecontrolgroup/voyager-screenshot.png)

Website & Documentation: https://voyager.tuyck.com/

Video Tutorial Here: https://voyager.tuyck.com/academy/

View the Voyager Cheat Sheet: https://voyager-cheatsheet.ulties.com/

<hr>

Laravel Admin & BREAD System (Browse, Read, Edit, Add, & Delete), supporting Laravel 8 and newer!
> Want to use Laravel 9? Use [Voyager 1.6](https://github.com/tuyck/voyager/tree/1.6)

> Want to use Laravel 10? Use [Voyager 1.7](https://github.com/tuyck/voyager/tree/1.7)

> Want to use Laravel 11? Use [Voyager 1.8](https://github.com/tuyck/voyager/tree/1.8)

## Installation Steps

### 1. Require the Package

After creating your new Laravel application you can include the Voyager package with the following command:

```bash
composer require tuyck/voyager
```

> If you are installing this on Laravel 10, we are working on getting a permanent release available; however, you can still use this with Larvel 10 by requiring the following:

```bash
composer require tuyck/voyager dev-1.6-l10
```

### 2. Add the DB Credentials & APP_URL

Next make sure to create a new database and add your database credentials to your .env file:

```
DB_HOST=localhost
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

You will also want to update your website URL inside of the `APP_URL` variable inside the .env file:

```
APP_URL=http://localhost:8000
```

### 3. Run The Installer

Lastly, we can install voyager. You can do this either with or without dummy data.
The dummy data will include 1 admin account (if no users already exists), 1 demo page, 4 demo posts, 2 categories and 7 settings.

To install Voyager without dummy simply run

```bash
php artisan voyager:install
```

If you prefer installing it with dummy run

```bash
php artisan voyager:install --with-dummy
```

And we're all good to go!

Start up a local development server with `php artisan serve` And, visit [http://localhost:8000/admin](http://localhost:8000/admin).

## Creating an Admin User

If you did go ahead with the dummy data, a user should have been created for you with the following login credentials:

>**email:** `admin@admin.com`   
>**password:** `password`

NOTE: Please note that a dummy user is **only** created if there are no current users in your database.

If you did not go with the dummy user, you may wish to assign admin privileges to an existing user.
This can easily be done by running this command:

```bash
php artisan voyager:admin your@email.com
```

If you did not install the dummy data and you wish to create a new admin user, you can pass the `--create` flag, like so:

```bash
php artisan voyager:admin your@email.com --create
```

And you will be prompted for the user's name and password.
