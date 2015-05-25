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

    /**
     * Class Permission
     * @package SamBenne\Jukumu\Models
     *
     * @property int         $id
     * @property string      $name
     * @property string|null $group
     * @property string|null $display_name
     * @property string|null $description
     */
    class Permission extends Model
    {
        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table;

        protected $fillable = [ 'name', 'group', 'display_name', 'description' ];

        /**
         * Creates a new instance of the model.
         *
         * @param array $attributes
         */
        public function __construct( array $attributes = [ ] )
        {
            parent::__construct( $attributes );
            $this->table = Config::get( 'jukumu.permissions_table' );
        }
    }