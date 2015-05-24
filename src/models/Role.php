<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */
    namespace SamBenne\Jukumu\Models;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model
    {
        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table;

        /**
         * Creates a new instance of the model.
         *
         * @param array $attributes
         */
        public function __construct( array $attributes = [ ] )
        {
            parent::__construct( $attributes );
            $this->table = Config::get( 'jukumu.roles_table' );
        }
    }