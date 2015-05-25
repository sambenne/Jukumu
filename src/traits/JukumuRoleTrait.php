<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */

    namespace SamBenne\Jukumu\Traits;

    use SamBenne\Jukumu\Models\Role;


    /**
     * Class JukumuRoleTrait
     * @package SamBenne\Jukumu\Traits
     *
     * @property int $role_id
     */
    trait JukumuRoleTrait
    {
        /**
         * @return \SamBenne\Jukumu\Models\Role
         */
        public function role()
        {
            return $this->hasOne(Role::class);
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

        }

        /**
         * Is Role
         *
         * This is used to check if a user has a particular role.
         *
         * @param string $role
         */
        public function is( $role )
        {

        }

        /**
         * Has Permission(s)
         *
         * This can be used to check if a user has a set of permissions.
         *
         * @param array $permissions
         */
        public function has( array $permissions = [] )
        {

        }
    }