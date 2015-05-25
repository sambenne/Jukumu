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

            return $role->id === $this->role_id;
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
            $roles = Role::whereIn('name', $roles)->list('id');

            return in_array($this->role_id, $roles);
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
            echo "<pre>" . print_r($this->role->permissions(), true) . "</pre>\n";
        }
    }