<?php

    /*
    * This file is part of Jukumu.
    *
    * (c) Sam Bennett <bennettsst@gmail.com>
    *
    * For the full copyright and license information, please view the LICENSE
    * file that was distributed with this source code.
    */

    namespace SamBenne\Jukumu\Models;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Facades\Config;

    /**
     * Class Role
     * @package SamBenne\Jukumu\Models
     *
     * @property int             $id
     * @property string          $name
     * @property int             $order
     * @property string|null     $display_name
     * @property string|null     $description
     *
     * @property-read Permission $permissions
     */
    class Role extends Model
    {
        /**
         * The database table used by the model.
         *
         * @var string
         */
        protected $table;

        protected $fillable = [ 'name', 'order', 'display_name', 'description' ];

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

        /**
         * Get All Permissions
         *
         * @return Permission
         */
        public function permissions()
        {
            return $this->belongsToMany( Permission::class )->withTimestamps();
        }
    }