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

To get the extra features into the User class you simply need to add inside the User class.

```php
use SamBenne\Jukumu\Traits\JukumuRoleTrait;
```

This may look similar to;

```php
use Authenticatable, CanResetPassword, JukumuRoleTrait;
```

Once this is in you can use the new methods in the User class.

 - setRole( $roleName )
 - is( $roleName )
 - hasRole( array $roleNames )
 - has( array $permissions )
 
There are also a helper class `Jukumu` that will help with creating the roles and permissions.

 - Jukumu::createRole()
 - Jukumu::createPermission()
 - Jukumu::attachRole()
 - Jukumu::attachPermissions()
 
### Create Role

This will create a role. This only requires a name however, there are extra information that you can add.

 - Name: Required, String
 - Display Name: Optional, String
 - Description: Optional, String
 - Order: Optional, Integer
 
### Create Permission

### Attaching

## Troubleshooting

If an error has occurred please check and add an issue with the error in the issues.


## License

Laravel Auto Presenter is licensed under [The MIT License (MIT)](LICENSE).