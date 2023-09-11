<?php
/*
 * Disallow direct access
 */
if (!defined('ABSPATH')) {
    die('Forbidden.');
}
function fotablog_scripts()
{
    // enqueue parent style
    wp_enqueue_style('fotablog-parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'fotablog_scripts');

if (!function_exists('fotablog_excerpt_limit')) {
    function fotablog_excerpt_limit($length)
    {
        if (is_admin()) {
            return $length;
        }
        return 40;
    }
    add_filter('excerpt_length', 'fotablog_excerpt_limit');
}

/**
 * Registers pattern categories.
 *
 * @since fotablog 1.0.0
 *
 * @return void
 */
function fotablog_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'fotablog-patterns' => array('label' => __('Fotablog Patterns', 'fotablog'))
    );

    $block_pattern_categories = apply_filters('fotablog_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'fotablog_register_pattern_category', 9);
