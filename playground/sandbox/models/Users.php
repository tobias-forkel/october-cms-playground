<?php namespace Playground\Sandbox\Models;
/**
 * A sandbox plugin for October CMS
 *
 * @category    Playground
 * @package     Playground_Sandbox
 * @copyright   Copyright (c) 2020 Tobias Forkel (http://tobias.forkel.me)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

use Model;

/**
 * Class Users
 * @package Playground\Sandbox\Models
 */
class Users extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'users';

    /**
     * Return all records from users table.
     *
     * @return mixed
     */
    public function getPeople()
    {
        return self::all();
    }
}
