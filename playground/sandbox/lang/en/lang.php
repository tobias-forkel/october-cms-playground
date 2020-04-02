<?php
/**
 * A sandbox plugin for October CMS
 *
 * @category    Playground
 * @package     Playground_Sandbox
 * @copyright   Copyright (c) 2020 Tobias Forkel (http://tobias.forkel.me)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

return [
    'plugin' => [
        'name' => 'Playground',
        'description' => 'Example Plugin'
    ],
    'settings' => [
        'label' => 'Playground',
        'description' => 'A sandbox environment for October CMS developers.',
        'tab_default' => 'Defaults',
        'enabled' => 'Enabled',
        'enabled_comment' => 'Enable integration.',
        'api_key' => 'API Key',
        'api_key_comment' => 'Credentials for external API access.',
        'account_id' => 'Account ID',
        'account_id_comment' => 'Your Account ID.',
    ]
];
