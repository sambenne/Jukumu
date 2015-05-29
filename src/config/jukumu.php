<?php

/*
* This file is part of Jukumu.
*
* (c) Sam Bennett <sam@cachethq.io>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

return [
    /*
    |--------------------------------------------------------------------------
    | Default users table.
    |--------------------------------------------------------------------------
    |
    | This option specifies the name of the table to store users in.
    |
    | Default: 'users'
    |
    */

    'users'                  => 'users',
    /*
    |--------------------------------------------------------------------------
    | Default roles table.
    |--------------------------------------------------------------------------
    |
    | This option specifies the name of the table to store roles in.
    |
    | Default: 'roles'
    |
    */

    'roles_table'            => 'roles',
    /*
    |--------------------------------------------------------------------------
    | Default permissions table.
    |--------------------------------------------------------------------------
    |
    | This option specifies the name of the table to store permissions in.
    |
    | Default: 'permissions'
    |
    */
    'permissions_table'      => 'permissions',
    /*
    |--------------------------------------------------------------------------
    | Default permission roles table.
    |--------------------------------------------------------------------------
    |
    | This option specifies the name of the table to store permission roles in.
    |
    | Default: 'permission_role'
    |
    */
    'role_permissions_table' => 'permission_role',
];
