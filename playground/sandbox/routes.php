<?php
/**
 * A sandbox plugin for October CMS
 *
 * @category    Playground
 * @package     Playground_Sandbox
 * @copyright   Copyright (c) 2020 Tobias Forkel (http://tobias.forkel.me)
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

Route::get('playground/sandbox', function ($params = []) {

    try {

        \App::call('\Playground\Sandbox\Controllers\Swing', [$params], 'index');
    }
    catch (\Exception $ex) {
        $ex->getMessage();
    }
});
