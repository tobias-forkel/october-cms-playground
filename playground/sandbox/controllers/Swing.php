<?php namespace Playground\Sandbox\Controllers;
/**
 * A sandbox plugin for October CMS
 *
 * @category    Playground
 * @package     Playground_Sandbox
 * @copyright   Copyright (c) 2020 Tobias Forkel (http://tobias.forkel.me)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

use Illuminate\Routing\Controller;
use Playground\Sandbox\Models\Settings;

class Swing extends Controller
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
     * @param $params
     */
    public function index($params)
    {
        try {

            $enabled = $this->settings->enabled;

            if ($enabled) {

                // Use settings values
                var_dump($this->settings->api_key);
            }
        }

        catch (\Exception $ex) {
            $ex->getMessage();
        }
    }
}
