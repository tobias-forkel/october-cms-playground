<?php namespace Playground\Sandbox;
/**
 * A sandbox plugin for October CMS
 *
 * @category    Playground
 * @package     Playground_Sandbox
 * @copyright   Copyright (c) 2020 Tobias Forkel (http://tobias.forkel.me)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

use System\Classes\PluginBase;
use System\Classes\SettingsManager;

class Plugin extends PluginBase
{
    /**
     * Register Component
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Playground\Sandbox\Components\Swing' => 'swing',
            'Playground\Sandbox\Components\Users' => 'users'
        ];
    }

    /**
     * Register Settings
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'playground.sandbox::lang.settings.label',
                'description' => 'playground.sandbox::lang.settings.description',
                'icon'        => 'icon-flask',
                'category'    => SettingsManager::CATEGORY_SYSTEM,
                'class'       => 'Playground\Sandbox\Models\Settings',
                'keywords'    => 'playground sandbox other keyswords',
            ]
        ];
    }
}
