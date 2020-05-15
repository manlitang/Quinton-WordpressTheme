<?php

# load stylesheet
function load_stylesheets() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',
        array(), false, 'all');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

# remove wordpress version in source code
function remove_wp_version_strings($src) {
    global $wp_version;
    parse_str(parse_url($src, PHP_URL_QUERY), $query);
    if (!empty($query['ver']) && $query['ver'] === $wp_version) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('script_loader_src', 'remove_wp_version_strings');
add_filter('style_loader_src', 'remove_wp_version_strings');

function remove_meta_version() {
    return '';
}
add_filter('the_generator', 'remove_meta_version');

# activate menu
function theme_register_nav_menu() {
    register_nav_menu('primary', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'theme_register_nav_menu');

# add javascript
wp_enqueue_script('script', get_template_directory_uri() . '/scripts/script.js', array(), true);

#add data text to menu-items
add_filter( 'nav_menu_link_attributes', 'add_custom_data_atts_to_nav', 10, 4 );
function add_custom_data_atts_to_nav( $atts, $item, $args ) {

$atts['data-text'] = $item->title;
return $atts;}

#load flickity plugin
function load_flickity() {
    wp_register_style( 'flickity_css', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );
    wp_enqueue_script( 'flickity_js', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'load_flickity' );
