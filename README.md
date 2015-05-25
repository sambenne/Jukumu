Jukumu
========================

This package adds extra functionality to the built in User Authentication. This adds the ability to do User Roles and Permissions.

![Jukumu](jukumu.png)

## Features
 - Ability to add a role to a user and add permissions to that role.
 
## Installing

You should install this package with [Composer](http://getcomposer.org/). Add the following "require" to your `composer.json` file and run the `composer install` command to install it.

##### Laravel 5

```json
{
    "require": {
        "sbennett/jukumu": "dev-master"
    }
}
```

Then, in your `config/app.php` add this line to your 'providers' array.

```php
'SamBenne\Jukumu\Providers\JukumuServiceProvider',
```

## Usage

## Troubleshooting

If an error has occurred please check and add an issue with the error in the issues.


## License

Laravel Auto Presenter is licensed under [The MIT License (MIT)](LICENSE).