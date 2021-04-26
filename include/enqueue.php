<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!function_exists('truehost_scripts')) {
    /**
     * Load theme's JavaScript and CSS sources.
     */
    function truehost_scripts()
    {
        // Get the theme data.
        $the_theme = wp_get_theme();
        $theme_version = $the_theme->get('Version');

        // CSS - Styles
        $vendor_css_version = $theme_version . '.' . filemtime(get_template_directory() . '/vendor/css/bootstrap.min.css');
        wp_enqueue_style('truehost-vendor-styles', get_template_directory_uri() . '/vendor/css/bootstrap.min.css', array(), $vendor_css_version);

        $theme_css_version = $theme_version . '.' . filemtime(get_template_directory() . '/dist/css/theme.min.css');
        wp_enqueue_style('truehost-theme-styles', get_template_directory_uri() . '/dist/css/theme.min.css', array(), $theme_css_version);

        // JS - Scripts
        $vendor_js_version = $theme_version . '.' . filemtime(get_template_directory() . '/vendor/js/bootstrap.min.js');
        wp_enqueue_script('truehost-vendor-scripts', get_template_directory_uri() . '/vendor/js/bootstrap.min.js', array(), $vendor_js_version, true);

        $theme_js_version = $theme_version . '.' . filemtime(get_template_directory() . '/dist/js/main.min.js');
        wp_enqueue_script('truehost-theme-scripts', get_template_directory_uri() . '/dist/js/main.min.js', array(), $theme_js_version, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }
}

add_action('wp_enqueue_scripts', 'truehost_scripts');
