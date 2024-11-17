<?php

/**
 * Plugin Name: Sdk Custom Elements
 * Plugin URI: https://breakdance.com/
 * Description: Boilerplate plugin to save your custom elements created with Element Studio.
 * Author: Sajid
 * Author URI: https://techscape.pk/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 1.0.0
 */

namespace SajidCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'SajidCustomElements',
        'Sajid element',
        'Sajid Custom Elements',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'SajidCustomElements',
        'Sajid macro',
        'Sajid Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'SajidCustomElements',
        'Sajid preset',
        'Sajid Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);
