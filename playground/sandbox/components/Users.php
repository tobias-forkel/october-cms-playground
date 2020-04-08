<?php namespace Playground\Sandbox\Components;
/**
 * A sandbox plugin for October CMS
 *
 * @category    Playground
 * @package     Playground_Sandbox
 * @copyright   Copyright (c) 2020 Tobias Forkel (http://tobias.forkel.me)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

use Cms\Classes\ComponentBase;
use Playground\Sandbox\Models\Users as UsersModel;

class Users extends ComponentBase
{
    /**
     * Define component details.
     *
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name' => 'playground.sandbox::lang.plugin.name',
            'description' => 'playground.sandbox::lang.plugin.description'
        ];
    }

    public function getPeople()
    {
        return (new UsersModel())->getPeople();
    }
}