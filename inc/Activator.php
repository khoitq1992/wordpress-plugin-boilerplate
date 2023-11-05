<?php

namespace PluginName;

class Activator {
    public static function activate() {
        // Do check if acf is installed
        if (!function_exists('acf_add_local_field_group')) {
            wp_die(__('Please install ACF plugin first', 'lucky-wheel'));
        }
    }
}