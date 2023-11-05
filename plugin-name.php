<?php

/**
 * Plugin Name
 *
 * @package           Plugin Name
 *
 * Plugin Name:       Plugin Name
 * Description:       Extends the Plugin Name plugin with additional features.
 * Version:           1.0.0
 * Author:            Khoi Tran
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

use PluginName\Activator;
use PluginName\Deactivator;
use PluginName\PluginName;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Currently plugin version.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * Require the constants file
 */
require_once plugin_dir_path( __FILE__ ) . 'constants.php';

/**
 * Autoload classes
 */
function plugin_name_autoloader($class) {
    if (strpos($class, 'PluginName\\') === 0) {
        $class = str_replace('PluginName\\', '', $class);
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
        $file = __DIR__ . '/inc/' . $class . '.php';

        if (file_exists($file)) {
            require $file;
        }
    }
}
spl_autoload_register('plugin_name_autoloader');

/**
 * Activate the plugin.
 */
function activate_plugin_name() {
	Activator::activate();
}

/**
 * Deactivate the plugin.
 */
function deactivate_plugin_name() {
	Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * Begins execution of the plugin.
 */
$plugin = new PluginName();
$plugin->run();