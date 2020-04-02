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
 * Class Settings
 * @package Playground\Sandbox\Models
 */
class Settings extends Model
{
    /**
     * @var array
     */
    public $implement = ['System.Behaviors.SettingsModel'];

    /**
     * @var string
     */
    public $settingsCode = 'playground_sandbox_settings';

    /**
     * @var string
     */
    public $settingsFields = 'fields.yaml';

    // Set defaults
    public function initSettingsData()
    {
        $this->enabled = 0;
        $this->api_key = '';
        $this->account_id = '';
    }
}
