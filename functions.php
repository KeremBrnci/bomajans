<?php
function custom_styles() {
    wp_enqueue_style( 'all', get_template_directory_uri().'/css/all.min.css',array(),false,'all');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css',array(),false,'all');
    wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css',array(),false,'all');
    wp_enqueue_style( 'simple-line', get_template_directory_uri().'/css/simple-line-icons.css',array(),false,'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css',array(),false,'all');

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );

add_theme_support('menus');
register_nav_menus(
    array(
        'menu'=>__('Menu','theme'),
    )
    );