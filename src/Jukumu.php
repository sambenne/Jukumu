<?php


/*
* This file is part of Jukumu.
*
* (c) Sam Bennett <bennettsst@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SamBenne\Jukumu;

use SamBenne\Jukumu\Models\Permission;
use SamBenne\Jukumu\Models\Role;

class Jukumu
{
    /**
     * Create Role.
     *
     * @param string      $name
     * @param string|null $display_name
     * @param string|null $description
     * @param int         $order
     *
     * @return Role
     */
    public static function createRole($name, $display_name = null, $description = null, $order = 0)
    {
        return Role::create(compact('name', 'display_name', 'description', 'order'));
    }

    /**
     * Create Permission.
     *
     * @param string      $name
     * @param string|null $group
     * @param string|null $display_name
     * @param string|null $description
     *
     * @return Permission
     */
    public static function createPermission($name, $group = null, $display_name = null, $description = null)
    {
        return Permission::create(compact('name', 'group', 'display_name', 'description'));
    }

    /**
     * Attach Role and Permissions.
     *
     * @param mixed $user
     * @param Role  $role
     * @param array $permissions
     */
    public static function attachRole($user, Role $role, array $permissions = [])
    {
        $user->setRole($role->id);

        self::attachPermissions($role, $permissions);
    }

    /**
     * Attach Permissions.
     *
     * @param Role  $role
     * @param array $permissions
     */
    public static function attachPermissions(Role $role, array $permissions = [])
    {
        if (!empty($permissions)) {
            for ($i = 0, $c = count($permissions); $i < $c; $i++) {
                $permissionData = self::getPermission($permissions[$i]);
                $permission = Permission::where('name', $permissionData->permission);

                if ($permissionData->group !== '') {
                    $permission->where('group', $permissionData->group);
                }

                $permission = $permission->first();

                $role->permissions()->attach($permission->id);
            }
        }
    }

    public static function getPermission($permission)
    {
        $permission = explode('.', $permission, 2);

        return (object) [
            'permission' => (isset($permission[1]) ? $permission[1] : $permission[0]),
            'group'      => (isset($permission[1]) ? $permission[0] : ''),
        ];
    }
}
