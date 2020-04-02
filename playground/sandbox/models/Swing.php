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
use Playground\Sandbox\Models\Settings;

/**
 * Class Swing
 * @package Playground\Sandbox\Models
 */
class Swing extends Model
{
    /**
     * @var Plugin settings
     */
    protected $settings;

    /**
     * Sandbox constructor.
     */
    public function __construct()
    {
        $this->settings = Settings::instance();
    }

    /**
     * Example method
     *
     * @param array $params
     */
    public function getExample($params = []) {

        // $this->settings->api_key
        // $this->settings->account_id
    }
}
