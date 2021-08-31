<?php

function play_reg_taxonomia(){
    register_taxonomy(
        'categorias',
        'videos',
        array (
            'labels' => array('name' => 'Categorias'),
            'hierarchical' => true
        )
    );
}
add_action('init', 'play_reg_taxonomia');

function play_reg_custom_post()
{
    register_post_type('Videos',
        array(
            'labels' => array ('name' => 'Videos'),
            'public' => true,
            'menu_position' => 4,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-media-video'
        )
    );
}
add_action('init', 'play_reg_custom_post');

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