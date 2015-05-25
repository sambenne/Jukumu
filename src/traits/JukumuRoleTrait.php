<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */

    namespace SamBenne\Jukumu\Traits;


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
            return $this->hasOne('\\SamBenne\\Jukumu\\Models\\Role');
        }
    }