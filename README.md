# Jukumu

This package adds extra functionality to the built in User Authentication. This adds the ability to do User Roles and Permissions.

## Features

    - Ability to add a role to a user and add permissions to that role.

## Installing

You should install this package with [Composer](http://getcomposer.org/). Add the following `require` to your `composer.json` file and run the `composer install` command to install it.

### Laravel 5

```json
{
    "require": {
        "sbennett/jukumu": "dev-master"
    }
}
```

Then in your `config/app.php` add this line to the `providers` array.

```php
'SamBenne\Jukumu\Providers\JukumuServiceProvider',
```

## Usage

To get the extra features into the User class you simply need to add inside the User class.

For example:

```php
use Illuminate\Database\Eloquent\Model;
use SamBenne\Jukumu\Traits\JukumuRoleTrait;

class User extends Model
{
    use Authenticatable, CanResetPassword, JukumuRoleTrait;
}
```

Once this is in you can use these new methods are automatically made available, within the class:

 - `setRole( $roleName )`
 - `is( $roleName )`
 - `hasRole( array $roleNames )`
 - `has( array $permissions )`

There are also a helper class `Jukumu` that will help with creating the roles and permissions.

    - `Jukumu::createRole( $name, $display_name = NULL, $description = NULL, $order = 0 )`
    - `Jukumu::createPermission( $name, $group = NULL, $display_name = NULL, $description = NULL )`
    - `Jukumu::attachRole( $user, Role $role, array $permissions = [] )`
    - `Jukumu::attachPermissions( Role $role, array $permissions = [] )`

### Create Role

This will create a role. This only requires a name however, there are extra information that you can add.

    - **Name**: Required, String
    - **Display Name**: Optional, String
    - **Description**: Optional, String
    - **Order**: Optional, Integer

**Example**

```php
Jukumu::createRole('admin', 'Admin', 'This is my main admin role.');
Jukumu::createRole('user', 'User', 'This is the basic user role.', 1);
```

### Create Permission

This will create a permission that you can attach to a role later.

    - **Name**: Required, String
    - **Group**: Optional, String
    - **Display Name**: Optional, String
    - **Description**: Optional, String

The group parameter allows you to group the permissions together, this then allows for dot notation on permission checking later.

**Example**

```php
Jukumu::createPermission('view', 'blog', 'View Blog Post', 'View the blog post.');
Jukumu::createPermission('edit', 'blog', 'Edit Blog Post', 'Edit the blog post.');
```

### Attaching

There are two methods of attaching the first `attachRole` allows you to attach a role to a user and the permissions to that role. The other just allows for attaching permissions to the role.

**Example 1**

This attaches a role and permissions to the user.

```php
Jukumu::attachRole(Auth::user(), Role::find(1), ['blog.view', 'blog.edit']);
```

**Example 2**

This attaches the permissions straight to the role.

```php
Jukumu::attachPermissions( Role::find(1), [
    'blog.view', 'blog.edit'
] );
```

## Troubleshooting

If an error has occurred please check and add an issue with the error in the issues.

## License

Jukumu is licensed under [The MIT License (MIT)](LICENSE).
