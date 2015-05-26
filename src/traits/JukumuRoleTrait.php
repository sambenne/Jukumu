<?php

/*
* This file is part of Jukumu.
*
* (c) Sam Bennett <bennettsst@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

    namespace SamBenne\Jukumu\Traits;

    use SamBenne\Jukumu\Models\Role;


    /**
     * Class JukumuRoleTrait
     * @package SamBenne\Jukumu\Traits
     *
     * @property int $role_id
     *
     * @property-read Role $role
     */
    trait JukumuRoleTrait
    {
        /**
         * @return \SamBenne\Jukumu\Models\Role
         */
        public function role()
        {
            return $this->belongsTo(Role::class);
        }

        /**
         * Set Role
         *
         * Nice way to set the role of a user.
         *
         * @param string|int $role
         */
        public function setRole( $role )
        {
            $this->role_id = $role;
            $this->save();
        }

        /**
         * Is Role
         *
         * This is used to check if a user has a particular role.
         *
         * @param string $role
         *
         * @return bool
         */
        public function is( $role )
        {
            /**
             * @var Role $role
             */
            $role = Role::where('name', $role)->first();

            return !is_null($role) && $role->id === $this->role_id;
        }

        /**
         * Has Role
         *
         * This allows for multiple role name checks.
         *
         * @param array $roles
         *
         * @return bool
         */
        public function hasRole( array $roles = [] )
        {
            $roles = Role::whereIn('name', $roles)->lists('id');

            return in_array($this->role_id, $roles);
        }

        /**
         * Has Permission(s)
         *
         * This can be used to check if a user has a set of permissions.
         *
         * @param array $permissions
         *
         * @return bool
         */
        public function has( array $permissions = [] )
        {
            $query = $this->role->permissions();

            for( $i = 0, $c = count($permissions); $i < $c; $i++ ) {
                $permission = explode('.', $permissions[$i], 2);
                if( count($permission) === 2 ) {
                    $query->orWhere(function( $query ) use ($permission) {
                        $query->where('name', $permission[1])
                              ->where('group', $permission[0]);
                    });
                } else {
                    $query->orWhere('name', $permissions[$i]);
                }
            }

            return ($query->count() > 0);
        }
    }