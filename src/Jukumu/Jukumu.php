<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */
    namespace SamBenne\Jukumu\Jukumu;

    use SamBenne\Jukumu\Models\Permission;
    use SamBenne\Jukumu\Models\Role;

    /**
     * Class Jukumu
     * @package SamBenne\Jukumu\Jukumu
     */
    class Jukumu
    {
        /**
         * Create Role
         *
         * @param string      $name
         * @param string|null $display_name
         * @param string|null $description
         * @param int         $order
         *
         * @return Role
         */
        public static function createRole( $name, $display_name = NULL, $description = NULL, $order = 0 )
        {
            $role = new Role();

            $role->name         = $name;
            $role->display_name = $display_name;
            $role->description  = $description;
            $role->order        = $order;

            $role->save();

            return $role;
        }

        /**
         * Create Permission
         *
         * @param string     $name
         * @param string|null $group
         * @param string|null $display_name
         * @param string|null $description
         *
         * @return Permission
         */
        public static function createPermission( $name, $group = NULL, $display_name = NULL, $description = NULL )
        {
            $permission = new Permission();

            $permission->name = $name;
            $permission->group = $group;
            $permission->display_name = $display_name;
            $permission->description = $description;

            $permission->save();

            return $permission;
        }

        /**
         * Attach Role and Permissions
         *
         * @param User  $user
         * @param Role  $role
         * @param array $permissions
         */
        public static function attachRole( User $user, Role $role, array $permissions = [] )
        {
            $user->setRole($role);

            self::attachPermissions( $user, $permissions );
        }

        /**
         * Attach Permissions
         *
         * @param User  $user
         * @param array $permissions
         */
        public static function attachPermissions( User $user, array $permissions = [] )
        {
            if( !empty($permissions) ) {
                for( $i = 0, $c = count($permissions); $i < $c; $i++ ) {
                    $permission = Permission::find(['name' => $permissions[$i]])->pluck('id');
                    $user->role()->attach($permission->id);
                }
            }
        }
    }