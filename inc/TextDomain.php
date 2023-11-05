<?php 

namespace PluginName;

class TextDomain {
    public static function load() {
		load_plugin_textdomain(
			'plugin-name',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);
	}
}