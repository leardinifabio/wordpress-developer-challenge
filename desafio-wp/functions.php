<?php

function play_custom_background(){
    $defaults = array (
        'default-color' => '000000',
        'default-image' => get_template_directory_uri() . '/images/background.jpg',
        'default-repeat' => 'no-repeat',
        'default-position' => 'center',
        'default-attachment' => 'fixed',
    );
    add_theme_support('custom-background', $defaults);
}
add_action('after_setup_theme', 'play_custom_background');

function play_add_recursos(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'play_add_recursos');

function play_reg_menu() {
    register_nav_menu(
        'play-menu',
        'Menu de navegação'
    );
}
add_action('init', 'play_reg_menu');