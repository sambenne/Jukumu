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
 * Class Permission.
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

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['name', 'group', 'display_name', 'description'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('jukumu.permissions_table');
    }
}
